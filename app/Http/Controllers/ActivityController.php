<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Strava;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

            $start_date = strtotime("10/02/2021");
            $end_date = strtotime("10/08/2021");
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
                if (!$user->activities->isEmpty()) {
                    return redirect()->back()
                        ->with('warning','Anda sudah tidak bisa menambahkan lagi data');
                } else {
                    return $this->getStravaActivity($user);
                }
            } 
            // RIDE
            elseif ($user->competition === 'Ride') {
                if (!$user->activities->isEmpty()) {
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
        if ($request->error) {
            return redirect()->route('activity.create')
                ->withErrors(['auth' => ['Gagal melakukan otorisasi dengan Strava']]);
        }

        if (Str::contains($request->scope, 'activity')) {
            if ($request->code !== null) {
                $token = Strava::token($request->code);
                $this->token = $token->access_token;
                $user_id = Auth::id();
                
                $user = User::find($user_id);
                $user->access_token = $token->access_token;
                $user->refresh_token = $token->refresh_token;
                $user->token_expires_at = $token->expires_at;
                $user->save();
    
                return redirect()->route('activity.create')
                    ->with('success','Berhasil melakukan otorisasi dengan Strava ! Data yang ditampilkan hanya data dari tanggal 2 - 9 Oktober');
            } else {
                return redirect()->route('activity.create')
                    ->withErrors(['auth' => ['Gagal melakukan otorisasi dengan Strava']]);
            }
        } else {
            return redirect()->route('activity.create')
                ->withErrors(['auth' => ['Harap memberi akses untuk melihat data aktifitas']]);
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
            $start_date = strtotime("10/02/2021");
            $end_date = strtotime("10/08/2021");
            
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
                'activity_type' => $user->competition,
                'activity_date' => $activity->start_date_local,
                'activity_length' => $activity->distance,
                'activity_duration' => $activity->elapsed_time,
            ]);
            return redirect()->route('activity.index')
                ->with('success','Berhasil mengunggah data');
        }
    }
}
