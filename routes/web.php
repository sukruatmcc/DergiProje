<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Dergi\DergiController;
use App\Http\Controllers\Firma\FirmaController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Reklam\ReklamController;
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
    Route::resource('admindergi',DergiController::class);
    Route::post('/dergi/edit/{id}',[DergiController::class,'update'])->name('admin.dergi.update');
    Route::post('/dergi/changeStatus',[DergiController::class,'changeStatus'])->name('admin.dergi.changeStatus');

    //Firma
    Route::resource('adminfirma',FirmaController::class);
    Route::post('/firma/edit/{id}',[FirmaController::class,'update'])->name('admin.firma.update');
    Route::post('/firma/changeStatus',[FirmaController::class,'changeStatus'])->name('admin.firma.changeStatus');

    //Categories
    Route::resource('admincategories',CategoriesController::class);
    Route::post('/category/edit/{id}',[CategoriesController::class,'update'])->name('admin.categories.update');
    Route::post('/category/changeStatus',[CategoriesController::class,'changeStatus'])->name('admin.category.changeStatus');

    //Users
    Route::resource('adminusers',UsersController::class);

    //ReklamType
    Route::resource('adminreklam_type', ReklamController::class);
    Route::post('/reklam_type/edit/{id}',[ReklamController::class,'update'])->name('admin.reklam_type.update');
    Route::post('/reklam_type/changeStatus',[ReklamController::class,'changeStatus'])->name('admin.reklam_type.changeStatus');
});

