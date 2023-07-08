<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
      if(! $request->ajax()){
        return view('pages.users_dashboard.announcements.index', ['page' => 'announcements']);
      }

      $announcements = Announcement::query();
      if (! $request->type){
        return DataTables::of($announcements)->toJson();
      }
      return DataTables::of($announcements->where('type',$request->type))->toJson();
    }

    public function store(AnnouncementRequest $announcementRequest)
    {
      if($announcementRequest->type != 'note'){
        $activeRunningText = Announcement::where('active',1)->first();
        if($activeRunningText && $announcementRequest->active =1){
          $activeRunningText->update(['active' => 0]);
        }
      }
      $announcement = Announcement::create([
        'title'=>$announcementRequest->title,
        'message'=>$announcementRequest->message,
        'type'=>$announcementRequest->type,
        'bg_color'=>$announcementRequest->bgColor,
        'text_color'=>$announcementRequest->textColor,
        'active'=>$announcementRequest->active
      ]);
      return response()->json([
        'response' => 'success',
        'announcement' => $announcement
      ]);
    }

    public function show(Announcement $announcement)
    {
      return response()->json([
        'response' => 'success',
        'announcement' => $announcement
      ]);
    }

    public function update(AnnouncementRequest $announcementRequest, Announcement $announcement)
    {
      $announcement->update([
        'title'=>$announcementRequest->title,
        'message'=>$announcementRequest->message,
        'bg_color'=>$announcementRequest->bgColor,
        'text_color'=>$announcementRequest->textColor,
      ]);
      return response()->json([
        'response' => 'success',
        'announcement' => $announcement
      ]);
    }

    public function changeStatus(Request $request)
    {
        $oldAnnouncement=Announcement::where('active',1)->first();
        $announcement = Announcement::findOrFail($request->id);

        if($oldAnnouncement ? ($oldAnnouncement->id != $announcement->id) : $announcement){
          if($oldAnnouncement){
            $oldAnnouncement->active = 0;
            $oldAnnouncement->save();
          }
          $value = !($announcement->active);
          $announcement->active =  $value;
          $announcement->save();
        }else{
          $value = !($announcement->active);
          $announcement->active =  $value;
          $announcement->save();
        }
        return response()->json([
          'response' => 'success',
          'announcement' => $announcement
        ]);
    }

    public function destroy(Announcement $announcement)
    {
      $announcement->delete();

      return response()->json([
        'response' => 'success',
        'message' => 'Announcement deleted successfully'
      ]);
    }
}
