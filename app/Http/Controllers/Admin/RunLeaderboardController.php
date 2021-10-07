<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRunLeaderboardRequest;
use App\Models\RunLeaderboard;
use Illuminate\Http\Request;

class RunLeaderboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($gender)
    {
        $leaderboards = RunLeaderboard::where('participant_gender',$gender)->orderBy('position', 'ASC')->get();
        return view('pages.admins_dashboard.run_leaderboard.index',[
            'leaderboards' => $leaderboards,
            'gender' => $gender
        ]);
    }

    public function show($id)
    {
        $leaderboard = RunLeaderboard::find($id);
        return view('pages.admins_dashboard.run_leaderboard.show',[
            'leaderboard' => $leaderboard
        ]);
    }

    public function create()
    {
        return view('pages.admins_dashboard.run_leaderboard.create');
    }

    public function store(StoreRunLeaderboardRequest $request)
    {
        $validated = $request->validated();

        RunLeaderboard::create([
            'position' => $validated['position'],
            'participant_name' => $validated['participant_name'],
            'participant_gender' => $validated['participant_gender'],
            'activity_date' => $validated['activity_date'],
            'activity_length' => $validated['activity_length'],
            'activity_duration' => $validated['activity_duration'],
            'strava_activity_url' => $validated['strava_activity_url'],
        ]);

        return redirect()->route('admin.leaderboard.run.index', ['gender' => $validated['participant_gender']])
            ->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $leaderboard = RunLeaderboard::find($id);
        dd($leaderboard);
        return view('pages.admins_dashboard.run_leaderboard.edit',[
            'leaderboard' => $leaderboard
        ]);
    }

    public function update(StoreRunLeaderboardRequest $request, $id)
    {
        $leaderboard = RunLeaderboard::find($id);
        $validated = $request->validated();

        $leaderboard->position = $validated['position'];
        $leaderboard->participant_name = $validated['participant_name'];
        $leaderboard->participant_gender = $validated['participant_gender'];
        $leaderboard->activity_date = $validated['activity_date'];
        $leaderboard->activity_length = $validated['activity_length'];
        $leaderboard->activity_duration = $validated['activity_duration'];
        $leaderboard->strava_activity_url = $validated['strava_activity_url'];
        $leaderboard->save();

        return redirect()->route('admin.leaderboard.run.index', ['gender' => $validated['participant_gender']])
            ->with('success', 'Berhasil menambahkan data');
    }

    public function destroy($id)
    {
        $leaderboard = RunLeaderboard::find($id);
        $leaderboard->delete();

        return redirect()->route('admin.leaderboard.run.index', ['gender' => $leaderboard->participant_gender])
            ->with('success', 'Berhasil menghapus data');
    }
}
