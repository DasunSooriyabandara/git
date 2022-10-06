<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemloginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\HosteldetailController;
use App\Http\Controllers\StudByHosController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login",[SystemloginController::class,"indexlogin"]);
Route::get("/dashboard",[DashboardController::class,"indexdashboard"]);

Route::post("/notification",[NotificationController::class,"addData"]);
Route::view('notification','notification');

Route::get("/tables",[HosteldetailController::class,"show"]); 
Route::get("/studentbyhostel",[StudByHosController::class,"showstudentsbyhostel"]); 
Route::get("/maps",[MapsController::class,"indexmaps"]);
Route::get("/user",[UserController::class,"indexuser"]);


// --------------------login admin---------------------
// Route::post("/login",[SystemloginController::class,"postlogin"]);
// Route::post("/logout",[SystemloginController::class,"postlogout"]);

// --------------------login admin part 2---------------------
 Route::post("/login",[SystemloginController::class,"login"]);
// Route::post("/logout",[SystemloginController::class,"postlogout"]);
