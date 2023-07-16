<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class AnnouncementController extends Controller
{
  public function index(Request $request)
  {
    if (!$request->ajax()) {
      return view('pages.users_dashboard.announcements.index', ['page' => 'announcements']);
    }

    $announcements = Announcement::query();
    if (!$request->type) {
      return DataTables::of($announcements)->toJson();
    }

    return DataTables::of($announcements->where('type', $request->type))->toJson();
  }

  public function store(AnnouncementRequest $announcementRequest)
  {
    $announcement = DB::transaction(function () use (
      $announcementRequest,
    ) {
      if ($announcementRequest->type != 'note') {
        $activeRunningText = Announcement::where('active', 1)->first();
        if ($activeRunningText && $announcementRequest->active == 1) {
          $activeRunningText->update(['active' => 0]);
        }
      }

      return Announcement::create([
        'title' => $announcementRequest->title,
        'message' => $announcementRequest->message,
        'type' => $announcementRequest->type,
        'bg_color' => $announcementRequest->bgColor,
        'text_color' => $announcementRequest->textColor,
        'active' => $announcementRequest->active
      ]);
    }, 5);

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
    DB::transaction(function () use (
      $announcementRequest,
      $announcement
    ) {
      $announcement->update([
        'title' => $announcementRequest->title,
        'message' => $announcementRequest->message,
        'bg_color' => $announcementRequest->bgColor,
        'text_color' => $announcementRequest->textColor,
      ]);
    }, 5);

    return response()->json([
      'response' => 'success',
      'announcement' => $announcement
    ]);
  }

  public function changeStatus(Request $request)
  {
    $currentActiveAnnouncement = Announcement::where('active', 1)->first();
    $announcement = Announcement::findOrFail($request->id);

    DB::transaction(function () use (
      $currentActiveAnnouncement,
      $announcement
    ) {
      if (! empty($currentActiveAnnouncement) ? $currentActiveAnnouncement->id != $announcement->id : false) {
        $currentActiveAnnouncement->active = 0;
        $currentActiveAnnouncement->save();
      }

      $value = !($announcement->active);
      $announcement->active =  $value;
      $announcement->save();
    }, 5);

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
