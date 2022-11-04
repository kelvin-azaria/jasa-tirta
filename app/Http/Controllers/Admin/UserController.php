<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(Request $request)
    {
      if(! $request->ajax()){
        return view('pages.admins_dashboard.users.index', ['page' => 'users']);
      }
      return DataTables::of(User::query()->orderBy('updated_at', 'DESC'))->toJson();
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

    public function exportUsersData()
    {
        $date = Carbon::parse(strtotime("now"))->format('d-m-Y');
        return Excel::download(new UsersExport, 'Daftar peserta '.$date.'.xlsx');
    }
}
