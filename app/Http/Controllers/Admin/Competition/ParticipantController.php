<?php

namespace App\Http\Controllers\Admin\Competition;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ParticipantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (empty($request->comp)) {
            return redirect()->back();
        }

        if (!$request->ajax()) {
            return view('pages.admins_dashboard.competitions.participants.index',
                [
                    'page' => 'participants',
                    'comp' => $request->comp
                ]);
        }

        $activities = Activity::select('activities.*', 'users.name', 'users.gender')
            ->join('users','activities.user_id', '=', 'users.id')
            ->where('users.competition', '=', $request->comp)
            ->whereIn('activity_duration', function ($query) {
                $query->selectRaw('MAX(activity_duration)')
                    ->from('activities')
                    ->groupBy('user_id');
            });
        return DataTables::of($activities)->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::find($id);
        return view('pages.admins_dashboard.activity.show', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
