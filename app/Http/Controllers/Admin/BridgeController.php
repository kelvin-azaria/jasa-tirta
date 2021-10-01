<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBridgeRequest;
use App\Models\Bridge;
use App\Models\User;
use Illuminate\Http\Request;

class BridgeController extends Controller
{

    public function index()
    {
        $users = User::where('competition','Bridge')->paginate(10);
        return view('pages.admins_dashboard.bridge.index',[
            'users' => $users
        ]);
    }

}
