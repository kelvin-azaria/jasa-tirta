<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $runningText = Announcement::where('active',1)->first();
        return view('pages.home.index',compact(['runningText']));
    }

    public function getRunningText(){
      $runningText = Announcement::where('active',1)->first();

      if(!$runningText){
        $runningText = 'null';
      }

      return response()->json([
        'response' => 'success',
        'runningText' => $runningText
      ]);
    }
}
