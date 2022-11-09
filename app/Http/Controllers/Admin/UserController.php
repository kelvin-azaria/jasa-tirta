<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
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

    public function show(User $user)
    {
      return view('pages.admins_dashboard.users.show', [
        'user' => $user,
        'page' => 'users'
      ]);
    }

    public function update(Request $request, $user)
    {
      $user = User::where('id',$user)->first();
      $user->update([
        'name'=>$request->name,
        'gender'=>$request->gender,
        'birth_date'=>$request->birth_date,
        'work_unit'=>$request->work_unit,
        'npp'=>$request->npp,
      ]);
      return response()->json([
        'response' => 'success',
        'message' => 'User updated successfully',
        'user' =>  $user,
      ]);
    }

    public function destroy(User $user)
    {
      if (is_null($user)) {
        return response()->json([
          'response' => 'error',
          'message' => 'Failed to delete user, please try again later'
        ]);
      }
      $user->delete();
      return response()->json([
        'response' => 'success',
        'message' => 'User deleted successfully'
      ]);
    }

    public function exportUsersData()
    {
        $date = Carbon::parse(strtotime("now"))->format('d-m-Y');
        return Excel::download(new UsersExport, 'Daftar peserta '.$date.'.xlsx');
    }
}
