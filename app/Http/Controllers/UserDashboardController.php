<?php

namespace App\Http\Controllers;

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

    public function export()
    {

    }
}
