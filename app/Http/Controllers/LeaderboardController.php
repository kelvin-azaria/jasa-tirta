<?php

namespace App\Http\Controllers;

use App\Models\RideLeaderboard;
use App\Models\RunLeaderboard;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function indexChess()
    {
      $status=1;
      return view('pages.leaderboards.index',compact('status'));
    }
    public function indexBridge()
    {
      return view('pages.leaderboards.bridge.index');
    }
    public function indexRide()
    {
      $leaderboards_male = RideLeaderboard::where('participant_gender','L')->orderBy('position', 'ASC')->get();
      $leaderboards_female = RideLeaderboard::where('participant_gender','P')->orderBy('position', 'ASC')->get();
      $last_edited_male = RideLeaderboard::where('participant_gender','L')->orderby('created_at', 'DESC')->first()->value('created_at');
      $last_edited_female = RideLeaderboard::where('participant_gender','L')->orderby('created_at', 'DESC')->first()->value('created_at');
      
      return view('pages.leaderboards.ride.index',[
        'leaderboards_male' => $leaderboards_male,
        'leaderboards_female' => $leaderboards_female,
        'last_edited_male' => (string)$last_edited_male,
        'last_edited_female' => (string)$last_edited_female
      ]);
    }
    public function indexRun()
    {
      $leaderboards = RunLeaderboard::orderby('position', 'ASC')->get();
      $last_edited = RunLeaderboard::orderby('created_at', 'DESC')->first()->value('created_at');

      return view('pages.leaderboards.run.index', [
        'leaderboards' => $leaderboards,
        'last_edited' => (string)$last_edited
      ]);
    }
    public function indexPubg()
    {
      return view('pages.leaderboards.pubg.index');
    }
}
