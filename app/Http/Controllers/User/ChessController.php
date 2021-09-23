<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = User::find(Auth::id());

        $is_registered = $user->competition === 'Chess';
        $google_form_status = $user->google_form_status;
        if (is_null($user->competition) || $is_registered) {
            return view('pages.users_dashboard.chess.index',[
                'user' => $user,
                'is_registered' => $is_registered,
                'google_form_status' => $google_form_status
            ]);
        } else {
            return redirect()->route('dashboard.index',['user' => $user])
                ->with('warning','Anda sudah terdaftar di lomba '.$user->competition);
        }
    }

    public function join()
    {
        $user = User::find(Auth::id());
        $user->competition = 'Chess';
        $user->save();

        return $this->index();
    }

    public function confirmGoogleForm()
    {
        $user = User::find(Auth::id());
        $user->google_form_status = true;
        $user->save();

        return $this->index();
    }
}
