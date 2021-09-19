<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('rule', RuleController::class)->only(['index']);

Route::resource('faq', FaqController::class)->only(['index']);

Route::resource('leaderboard', LeaderboardController::class)->only(['index']);

Route::resource('dashboard', UserDashboardController::class)->only(['index','show']);
Route::get('/strava_authorize', [UserDashboardController::class, 'stravaAuth'])->name('user.strava_auth');

Route::resource('activity', ActivityController::class)->only(['index','create','destroy']);
Route::post('/activity/{activity}', [ActivityController::class, 'store'])->name('activity.store');

Route::get('/strava_get_token', [ActivityController::class, 'getToken'])->name('strava.getToken');

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
  Route::get('/bridge', [AdminDashboardController::class, 'indexBridge'])->name('index.bridge');
  Route::get('/bridge/edit', [AdminDashboardController::class, 'editBridge'])->name('edit.bridge');
  Route::get('/bridge/create', [AdminDashboardController::class, 'createBridge'])->name('create.bridge');
  Route::get('/bridge/show', [AdminDashboardController::class, 'showBridge'])->name('show.bridge');
});