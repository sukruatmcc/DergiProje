<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Dergi\DergiController;
use App\Http\Controllers\Firma\FirmaController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Users\UsersController;
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

    //Firma
    Route::resource('AdminFirma',FirmaController::class);
    Route::post('/firma/edit/{id}',[FirmaController::class,'update'])->name('admin.firma.update');

    //Categories
    Route::resource('AdminCategories',CategoriesController::class);
    Route::post('/category/edit/{id}',[FirmaController::class,'update'])->name('admin.categories.update');

    //Users
    Route::resource('AdminUsers',UsersController::class);
});

