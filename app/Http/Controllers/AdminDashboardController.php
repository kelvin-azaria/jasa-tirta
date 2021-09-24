<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $users = User::whereDate('created_at', Carbon::today())->get();
        return view('pages.admins_dashboard.index',[
            'users' => $users
        ]);
    }
}
