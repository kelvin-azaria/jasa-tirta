<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Strava;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::find(Auth::id());
        $activities = $user->activities;
        $is_registered = ($user->competition === 'Ride' || $user->competition === 'Run');
        
        if (is_null($user->competition) || $is_registered) {
            if (is_null($activities)) {
                $total_distance = null;
            } else {
                $total_distance = $activities->sum('activity_length');
            }

            $start_date = strtotime("10/01/2021");
            $end_date = strtotime("10/07/2021");
            $current_date = strtotime("now");
    
            return view('pages.users_dashboard.activity.index',[
                'user' => $user,
                'activities' => $activities,
                'is_registered' => $is_registered,
                'total_distance' => $total_distance,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'current_date' => $current_date
            ]);
        } else {
            return redirect()->route('dashboard.index',['user' => $user])
                ->with('warning','Anda sudah terdaftar di lomba '.$user->competition);
        }
        
    }

    public function create()
    {
        $user = User::find(Auth::id());
        $is_registered = ($user->competition === 'Ride' || $user->competition === 'Run');

        if ($is_registered) {
            // RUN
            if ($user->competition === 'Run') {
                if ($user->activities !== null) {
                    return redirect()->back()
                        ->with('warning','Anda sudah tidak bisa menambahkan lagi data');
                } else {
                    return $this->getStravaActivity($user);
                }
            } 
            // RIDE
            elseif ($user->competition === 'Ride') {
                if ($user->activities !== null) {
                    if ($user->gender === 'L') {
                        $activity_count = count($user->activities);
    
                        if ($activity_count < 2) {
                            return $this->getStravaActivity($user);
                        } else {
                            return redirect()->back()
                                ->with('warning','Anda sudah tidak bisa menambahkan lagi data');
                        }
                    } elseif ($user->gender === 'P') {
                        return $this->getStravaActivity($user);
                    }
                } else {
                    return $this->getStravaActivity($user);
                }
            }
        } else {
            return redirect()->back()
                ->with('warning','Anda belum terdaftar di lomba Ride & Run');
        }
        
    }

    public function store(Request $request)
    {
        $user = User::find(Auth::id());

        if ($request->activity_data === null) {
            return redirect()->back()
                ->with('warning','Harap pilih data yang akan di submit');
        }

        // SEPARATE REQUEST VALUES
        $requests = explode(',', $request->activity_data);
        $activity_id = $requests[0];
        $activity_date = $requests[1];

        // RUN
        if ($user->competition === 'Run') {
            return $this->storeStravaActivity($activity_id, $user);
        } 
        // RIDE
        elseif ($user->competition === 'Ride') 
        {
            return $this->storeStravaActivity($activity_id, $user);
        }

        // RIDE
        // elseif ($user->competition === 'Ride') {
        //     $last_user_activity = $user->activities->last();

        //     if ($last_user_activity === null) {
        //         return $this->storeStravaActivity($activity_id, $user);
        //     } else {
        //         //convert date format
        //         $date1 = date('d-m-Y', strtotime($last_user_activity->activity_date));
        //         $date2 = date('d-m-Y', strtotime($activity_date));

        //         //create datetime from converted data
        //         $last_activity_date = new DateTime($date1);
        //         $submitted_activity_date = new DateTime($date2);

        //         $interval = $last_activity_date->diff($submitted_activity_date);

        //         if ((integer)$interval->format('%a') === 1) {
        //             return $this->storeStravaActivity($activity_id, $user);
        //         } else {
        //             return redirect()->back()
        //                 ->with('warning','Jeda terlalu panjang dari data yang terakhir di submit');
        //         }
        //     }
        // }
        
    }

    public function destroy($activity_id)
    {
        $activity = Activity::find($activity_id);

        if ($activity === null) {
            return redirect()->back();
        } else {
            $activity->delete();
            return redirect()->back()
                ->with('success','Data berhasil dihapus');
        }
    }

    public function join($type)
    {
        $user = User::find(Auth::id());
        $user->competition = $type;
        $user->save();

        return $this->index();
    }

    public function getToken(Request $request)
    {
        if ($request->code !== null) {
            $token = Strava::token($request->code);
            $this->token = $token->access_token;
            $user_id = Auth::id();
            
            $user = User::find($user_id);
            $user->access_token = $token->access_token;
            $user->refresh_token = $token->refresh_token;
            $user->token_expires_at = $token->expires_at;
            $user->save();

            return redirect()->route('activity.create');
        } else {
            return redirect()->route('activity.create')
                ->withErrors(['auth' => ['Gagal melakukan otorisasi dengan Strava']]);
        }
    }

    private function getStravaActivity($user)
    {
        if ($user->access_token !== null) {
            if(strtotime(Carbon::now()) > $user->token_expires_at) {
                $refresh = Strava::refreshToken($user->refresh_token);
                $user->access_token = $refresh->access_token;
                $user->refresh_token = $refresh->refresh_token;
                $user->save();
            }
            
            $activities = Strava::activities($user->access_token);

            //date format for strtotime is month/day/year
            $start_date = strtotime("09/17/2021");
            $end_date = strtotime("10/07/2021");
            
            return view('pages.users_dashboard.activity.create',[
                'user' => $user, 
                'activities' => $activities,
                'start_date' => $start_date,
                'end_date' => $end_date
            ]);
        }

        $user = Auth::user();
        return view('pages.users_dashboard.activity.create',['user' => $user]);
    }

    private function storeStravaActivity($activity_id, $user)
    {
        if(strtotime(Carbon::now()) > $user->token_expires_at) {
            $refresh = Strava::refreshToken($user->refresh_token);
            $user->access_token = $refresh->access_token;
            $user->refresh_token = $refresh->refresh_token;
            $user->save();
        }

        $activity = Strava::activity($user->access_token, $activity_id);

        if (Activity::where('strava_activity_id', $activity_id)->exists()) {
            return redirect()->route('activity.create')
                ->with('warning','Data sudah pernah diunggah');
        } else {
            Activity::create([
                'user_id' => $user->id,
                'strava_activity_id' => $activity_id,
                'activity_name' => $activity->name,
                'activity_type' => $activity->type,
                'activity_date' => $activity->start_date_local,
                'activity_length' => $activity->distance,
                'activity_duration' => $activity->elapsed_time,
            ]);
            return redirect()->route('activity.index')
                ->with('success','Berhasil mengunggah data');
        }
    }
}
