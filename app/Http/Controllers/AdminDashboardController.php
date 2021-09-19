<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        return view('pages.admins_dashboard.index');
    }
    public function indexBridge(){
      return view('pages.admins_dashboard.bridge.index');
    }
    public function createBridge(){
      return view('pages.admins_dashboard.bridge.create');
    }
    public function editBridge(){
      return view('pages.admins_dashboard.bridge.edit');
    }
    public function showBridge(){
      return view('pages.admins_dashboard.bridge.show');
    }
}
