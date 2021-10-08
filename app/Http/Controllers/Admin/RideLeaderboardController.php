<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRideLeaderboardRequest;
use App\Models\RideLeaderboard;
use Illuminate\Http\Request;

class RideLeaderboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($gender)
    {
        $leaderboards = RideLeaderboard::where('participant_gender',$gender)->orderBy('position', 'ASC')->get();
        return view('pages.admins_dashboard.ride_leaderboard.index',[
            'leaderboards' => $leaderboards,
            'gender' => $gender
        ]);
    }

    public function show($id)
    {
        $leaderboard = RideLeaderboard::find($id);
        return view('pages.admins_dashboard.ride_leaderboard.show',[
            'leaderboard' => $leaderboard
        ]);
    }

    public function create()
    {
        return view('pages.admins_dashboard.ride_leaderboard.create');
    }

    public function store(StoreRideLeaderboardRequest $request)
    {
        $validated = $request->validated();

        RideLeaderboard::create([
            'position' => $validated['position'],
            'participant_name' => $validated['participant_name'],
            'participant_gender' => $validated['participant_gender'],
            'participant_work_unit' => $validated['participant_work_unit'],
            'activity_date' => $validated['activity_date'],
            'activity_length' => $validated['activity_length'],
            'activity_duration' => $validated['activity_duration'],
            'strava_activity_url_1' => $validated['strava_activity_url_1'],
            'strava_activity_url_2' => $validated['strava_activity_url_2'],
        ]);

        return redirect()->route('admin.leaderboard.ride.index', ['gender' => $validated['participant_gender']])
            ->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $leaderboard = RideLeaderboard::find($id);
        return view('pages.admins_dashboard.ride_leaderboard.edit',[
            'leaderboard' => $leaderboard
        ]);
    }

    public function update(StoreRideLeaderboardRequest $request, $id)
    {
        $leaderboard = RideLeaderboard::find($id);
        $validated = $request->validated();

        $leaderboard->position = $validated['position'];
        $leaderboard->participant_name = $validated['participant_name'];
        $leaderboard->participant_gender = $validated['participant_gender'];
        $leaderboard->participant_work_unit = $validated['participant_work_unit'];
        $leaderboard->activity_date = $validated['activity_date'];
        $leaderboard->activity_length = $validated['activity_length'];
        $leaderboard->activity_duration = $validated['activity_duration'];
        $leaderboard->strava_activity_url_1 = $validated['strava_activity_url_1'];
        $leaderboard->strava_activity_url_2 = $validated['strava_activity_url_2'];
        $leaderboard->save();

        return redirect()->route('admin.leaderboard.ride.index', ['gender' => $validated['participant_gender']])
            ->with('success', 'Berhasil menambahkan data');
    }

    public function destroy($id)
    {
        $leaderboard = RideLeaderboard::find($id);
        $leaderboard->delete();

        return redirect()->route('admin.leaderboard.ride.index', ['gender' => $leaderboard->participant_gender])
            ->with('success', 'Berhasil menghapus data');
    }
}
