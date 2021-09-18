<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Strava;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $activities = Activity::all();
        $total_distance = $activities->sum('activity_length');
        return view('pages.users_dashboard.runs.index',[
            'user' => $user, 
            'activities' => $activities,
            'total_distance' => $total_distance
        ]);
    }

    public function create()
    {
        $user = User::find(Auth::id());
        if ($user->access_token !== null) {
            $activities = Strava::activities($user->access_token);
            return view('pages.users_dashboard.runs.new',['user' => $user, 'activities' => $activities]);
        }

        $user = Auth::user();
        return view('pages.users_dashboard.runs.new',['user' => $user]);
        
    }

    public function store($activity_id)
    {
        $user = User::find(Auth::id());

        if(strtotime(Carbon::now()) > $user->token_expires_at) {
            $refresh = Strava::refreshToken($user->refresh_token);
            $user->access_token = $refresh->access_token;
            $user->refresh_token = $refresh->refresh_token;
            $user->save();
        }

        $activity = Strava::activity($user->access_token, $activity_id);

        if (Activity::where('strava_activity_id', $activity_id)->exists()) {
            return redirect()->route('run.create')
            ->with('duplicate','Data sudah pernah diunggah');
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
            return redirect()->route('run.index')
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

            return redirect()->route('run.create');
        } else {
            return redirect()->route('run.create')
                ->withErrors(['auth' => ['Gagal melakukan otorisasi dengan Strava']]);
        }
    }
}
