<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('pages.home.index');
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
