<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Admin\BridgeController as AdminBridgeController;
use App\Http\Controllers\User\BridgeController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('rule', RuleController::class)->only(['index']);

Route::resource('faq', FaqController::class)->only(['index']);

Route::resource('leaderboard', LeaderboardController::class)->only(['index']);

Route::resource('dashboard', UserDashboardController::class)->only(['index','show']);
Route::get('/strava_authorize', [UserDashboardController::class, 'stravaAuth'])->name('user.strava_auth');

Route::resource('activity', ActivityController::class)->only(['index','create','store','destroy']);
Route::get('/strava_get_token', [ActivityController::class, 'getToken'])->name('strava.getToken');

Route::resource('bridge', BridgeController::class)->only(['index']);

Auth::routes([
  'verify' => false,
]);
Route::prefix('leaderboards')-> name('leaderboards.')->group(function(){
  Route::get('/pubg', [LeaderboardController::class, 'indexPubg'])-> name('pubg');
  Route::get('/chess', [LeaderboardController::class, 'indexChess'])-> name('chess');
  Route::get('/bridge', [LeaderboardController::class, 'indexBridge'])-> name('bridge');
  Route::get('/run', [LeaderboardController::class, 'indexRun'])-> name('run');
  Route::get('/bike', [LeaderboardController::class, 'indexBike'])-> name('bike');
});
//ADMIN AUTH ROUTES
Route::prefix('/admin')->name('admin.')->group(function(){
  Route::namespace('Auth')->group(function(){

    //Login Routes
    Route::get('/login','\App\Http\Controllers\Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login','\App\Http\Controllers\Admin\Auth\LoginController@login');
    Route::post('/logout','\App\Http\Controllers\Admin\Auth\LoginController@logout')->name('logout');
  });

  Route::resource('dashboard', AdminDashboardController::class)->only(['index']);

  Route::resource('bridge', AdminBridgeController::class);

});