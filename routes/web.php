<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Admin\ActivityController as AdminActivityController;
use App\Http\Controllers\Admin\BridgeController as AdminBridgeController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\User\BridgeController;
use App\Http\Controllers\User\ChessController;
use App\Http\Controllers\User\PubgController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('rule', RuleController::class)->only(['index']);

Route::resource('faq', FaqController::class)->only(['index']);

Route::resource('leaderboard', LeaderboardController::class)->only(['index']);
Route::prefix('leaderboards')-> name('leaderboards.')->group(function(){
  Route::get('/pubg', [LeaderboardController::class, 'indexPubg'])-> name('pubg');
  Route::get('/chess', [LeaderboardController::class, 'indexChess'])-> name('chess');
  Route::get('/bridge', [LeaderboardController::class, 'indexBridge'])-> name('bridge');
  Route::get('/run', [LeaderboardController::class, 'indexRun'])-> name('run');
  Route::get('/bike', [LeaderboardController::class, 'indexBike'])-> name('bike');
});

Route::resource('dashboard', UserDashboardController::class)->only(['index','show']);
Route::get('/strava_authorize', [UserDashboardController::class, 'stravaAuth'])->name('user.strava_auth');

Route::resource('activity', ActivityController::class)->only(['index','create','store','destroy']);
Route::get('/activity/join/{type}', [ActivityController::class, 'join'])->name('activity.join');
Route::get('/strava_get_token', [ActivityController::class, 'getToken'])->name('strava.getToken');

Route::resource('bridge', BridgeController::class)->only(['index']);
Route::get('/bridge/join', [BridgeController::class, 'join'])->name('bridge.join');
Route::get('/bridge/google_form_confirmation', [BridgeController::class, 'confirmGoogleForm'])->name('bridge.google_form_confirmation');

Route::resource('pubg', PubgController::class)->only(['index']);
Route::get('/pubg/join', [PubgController::class, 'join'])->name('pubg.join');
Route::get('/pubg/google_form_confirmation', [PubgController::class, 'confirmGoogleForm'])->name('pubg.google_form_confirmation');

Route::resource('chess', ChessController::class)->only(['index']);
Route::get('/chess/join', [ChessController::class, 'join'])->name('chess.join');
Route::get('/chess/google_form_confirmation', [ChessController::class, 'confirmGoogleForm'])->name('chess.google_form_confirmation');

Auth::routes([
  'verify' => false,
]);
//ADMIN AUTH ROUTES
Route::prefix('/admin')->name('admin.')->group(function(){
  Route::namespace('Auth')->group(function(){

    //Login Routes
    Route::get('/login','\App\Http\Controllers\Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login','\App\Http\Controllers\Admin\Auth\LoginController@login');
    Route::post('/logout','\App\Http\Controllers\Admin\Auth\LoginController@logout')->name('logout');
  });

  Route::resource('dashboard', AdminDashboardController::class)->only(['index']);
  
  Route::resource('activity', AdminActivityController::class)->only(['show','destroy']);
  Route::get('/activity_run', [AdminActivityController::class, 'indexRun'])->name('activity.index.run');
  Route::get('/activity_ride', [AdminActivityController::class, 'indexRide'])->name('activity.index.ride');
  Route::get('/activity_run_user', [AdminActivityController::class, 'indexUserRun'])->name('activity.index.run.user');
  Route::get('/activity_run_user/export', [AdminActivityController::class, 'exportRun'])->name('activity.index.run.user.export');
  Route::get('/activity_ride_user', [AdminActivityController::class, 'indexUserRide'])->name('activity.index.ride.user');
  Route::get('/activity_ride_user/export', [AdminActivityController::class, 'exportRide'])->name('activity.index.ride.user.export');
  
  Route::resource('users', AdminUserController::class)->only(['index','show','destroy']);
});