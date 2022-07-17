<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\volunteerController;
use Illuminate\Support\Facades\Route;

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

//  default Route
//------------------------------
Route::get('/', function () {
    return view('welcome');
});

//  Admin Login Routes
//-----------------------
Route::get('admin/login',[AdminController::class, 'loginForm']);
Route::post('admin/login',[AdminController::class, 'store'])->name('admin.login');

//  Admin
//-------------------------------
//Route::middleware(['auth:admin', config('jetstream.auth_session'),'verified'])->group(function() {
//    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//});

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin'], function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/report/add', [ReportController::class, 'addReport'])->name('add.report');
    Route::post('/report/store', [ReportController::class, 'storeReport'])->name('store.report');
});





Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [volunteerController::class, 'index'])->name('dashboard');

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
});


