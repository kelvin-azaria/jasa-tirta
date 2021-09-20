<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BridgeController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        //check if user already registered on bridge
        $bridge =$user->bridge();
        if (is_null($bridge)) {
            $status = 'registered';
        } else {
            $status = 'unregistered';
        }
        
        return view('pages.users_dashboard.bridge.index',[
            'user' => $user, 
            'status' => $status,
            'bridge' => $bridge
        ]);
    }
}
