<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Dergi\DergiController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin-panel')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name("admin.index");
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
    //Dergi
    Route::resource('AdminDergi',DergiController::class);
    Route::post('/dergi/edit/{id}',[DergiController::class,'update'])->name('admin.dergi.update');
    Route::post('/dergi/changeStatus',[DergiController::class,'changeStatus'])->name('admin.dergi.changeStatus');
});

