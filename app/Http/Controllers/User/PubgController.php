<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PubgController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = User::find(Auth::id());
        //check if user already registered on bridge
        $pubg_team = DB::table('pubg_teams')
            ->join('pubg_players','pubg_teams.id','=','pubg_players.pubg_team_id')
            ->join('users','pubg_players.id','=','users.pubg_player_id')
            ->select('pubg_teams.*','pubg_players.*')
            ->where('users.id','=',$user->id)
            ->first();
            
        if (is_null($pubg_team)) {
            $status = 'unregistered';
        } else {
            $status = 'registered';
        }
        
        return view('pages.users_dashboard.pubg.index',[
            'user' => $user, 
            'status' => $status,
            'pubg_team' => $pubg_team
        ]);
    }
}
