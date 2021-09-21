<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Strava;
use App\Models\User;
use Carbon\Carbon;
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
        $activity = $user->activity;
        
        if (is_null($activity)) {
            $total_distance = null;
        } else {
            $total_distance = $activity->sum('activity_length');
        }

        return view('pages.users_dashboard.activity.index',[
            'user' => $user, 
            'activity' => $activity,
            'total_distance' => $total_distance
        ]);
    }

    public function create()
    {

        $user = User::find(Auth::id());
        if ($user->activity()->exists()) {
            return redirect()->back()
                ->with('warning','Anda sudah pernah menambahkan data');
        } else {
            if ($user->access_token !== null) {
                if(strtotime(Carbon::now()) > $user->token_expires_at) {
                    $refresh = Strava::refreshToken($user->refresh_token);
                    $user->access_token = $refresh->access_token;
                    $user->refresh_token = $refresh->refresh_token;
                    $user->save();
                }
                
                //get last 3 items from strava
                $activities = Strava::activities($user->access_token);

                //date format for strtotime is month/day/year
                $start_date = strtotime("09/21/2021");
                $end_date = strtotime("10/01/2021");
                
                return view('pages.users_dashboard.activity.new',[
                    'user' => $user, 
                    'activities' => $activities,
                    'start_date' => $start_date,
                    'end_date' => $end_date
                ]);
            }
    
            $user = Auth::user();
            return view('pages.users_dashboard.activity.new',['user' => $user]);
        }
        
    }

    public function store(Request $request)
    {
        if ($request->type === null) {
            return redirect()->back()
                ->with('warning','Harap pilih kategori lomba yang ingin diikuti');
        } elseif ($request->activity_id === null) {
            return redirect()->back()
                ->with('warning','Harap pilih data yang akan di submit');
        }

        $user = User::find(Auth::id());

        if(strtotime(Carbon::now()) > $user->token_expires_at) {
            $refresh = Strava::refreshToken($user->refresh_token);
            $user->access_token = $refresh->access_token;
            $user->refresh_token = $refresh->refresh_token;
            $user->save();
        }
        $activity_id = $request->activity_id;

        $activity = Strava::activity($user->access_token, $activity_id);

        if (Activity::where('strava_activity_id', $activity_id)->exists()) {
            return redirect()->route('activity.create')
            ->with('warning','Data sudah pernah diunggah');
        } else {
            Activity::create([
                'user_id' => $user->id,
                'strava_activity_id' => $activity_id,
                'activity_name' => $activity->name,
                'activity_type' => $request->type,
                'activity_date' => $activity->start_date_local,
                'activity_length' => $activity->distance,
                'activity_duration' => $activity->elapsed_time,
            ]);
            return redirect()->route('activity.index')
                ->with('success','Berhasil mengunggah data');
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
}
