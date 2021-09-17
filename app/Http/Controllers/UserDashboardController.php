<?php

namespace App\Http\Controllers;

use Strava;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {

    }

    public function index()
    {
        $user = Auth::user();
        return view('pages.users_dashboard.index',['user' => $user]);
    }

    public function stravaAuth(){
        return Strava::authenticate($scope='activity:read_all');
    }
}
