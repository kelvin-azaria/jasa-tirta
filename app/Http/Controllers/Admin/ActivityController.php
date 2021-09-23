<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function indexRide()
    {
        $type = 'Ride';
        $activities = Activity::where('activity_type','Bike')->paginate(10);

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
}
