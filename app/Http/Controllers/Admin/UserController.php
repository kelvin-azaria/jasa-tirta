<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        return view('pages.admins_dashboard.users.index',[
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('pages.admins_dashboard.users.show', ['user' => $user]);
    }

    public function destroy($id)
    {
        $users = User::find($id);

        if (is_null($users)) {
            return redirect()->back()
                ->with('warning','Terjadi kesalahan saat menghapus data');
        }

        $users->delete();

        return redirect()->route('admin.users.index')
            ->with('success','Data berhasil dihapus');
    }
}
