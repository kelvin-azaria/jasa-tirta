<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RideParticipantsExport;
use App\Exports\RideDataExport;
use App\Exports\RunDataExport;
use App\Exports\RunParticipantsExport;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function indexUserRide()
    {
        $type = 'Ride';
        $users = User::where('competition','Ride')->paginate(10);

        return view('pages.admins_dashboard.activity.indexUser',[
            'users' => $users,
            'type' => $type
        ]);
    }

    public function indexUserRun()
    {
        $type = 'Run';
        $users = User::where('competition','Run')->paginate(10);

        return view('pages.admins_dashboard.activity.indexUser',[
            'users' => $users,
            'type' => $type
        ]);
    }

    public function indexRide()
    {
        $type = 'Ride';
        $activities = Activity::where('activity_type','Ride')->paginate(10);

        return view('pages.admins_dashboard.activity.index',[
            'activities' => $activities,
            'type' => $type
        ]);
    }

    public function indexRun()
    {
        $type = 'Run';
        $activities = Activity::where('activity_type','Run')->paginate(10);

        return view('pages.admins_dashboard.activity.index',[
            'activities' => $activities,
            'type' => $type
        ]);
    }

    // public function create()
    // {
    //     return view('pages.admins_dashboard.activity.create');
    // }

    public function show($id)
    {
        $activity = Activity::find($id);
        return view('pages.admins_dashboard.activity.show', ['activity' => $activity]);
    }

    public function destroy($id)
    {
        $activity = Activity::find($id);

        if (is_null($activity)) {
            return redirect()->back()
                ->with('warning','Terjadi kesalahan saat menghapus data');
        }

        $activity->delete();

        return redirect()->back()
            ->with('success','Data berhasil dihapus');
    }

    public function exportRun()
    {
        $date = Carbon::parse(strtotime("now"))->format('d-m-Y');
        return Excel::download(new RunParticipantsExport, 'Daftar peserta run '.$date.'.xlsx');
    }

    
    public function exportRide()
    {
        $date = Carbon::parse(strtotime("now"))->format('d-m-Y');
        return Excel::download(new RideParticipantsExport, 'Daftar peserta ride '.$date.'.xlsx');
    }

    public function exportRideData()
    {
        $date = Carbon::parse(strtotime("now"))->format('d-m-Y');
        return Excel::download(new RideDataExport, 'Daftar ride '.$date.'.xlsx');
    }
    
    public function exportRunData()
    {
        $date = Carbon::parse(strtotime("now"))->format('d-m-Y');
        return Excel::download(new RunDataExport, 'Daftar run '.$date.'.xlsx');
    }
}
