<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Manage\MeetingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::post('/', function (Request $request) {
    dd($request->all());
});

Route::get('/meeting', [MeetingController::class, 'index'])->name('meeting');

Route::get('manage-meeting-leader/{id?}', [MeetingController::class, 'manageLeader'])->name('manage.leader');
Route::get('manage-meeting-user/{id?}', [MeetingController::class, 'manageUser'])->name('manage.user');




