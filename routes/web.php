<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
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
Route::get('/', [UserController::class,'index'])->name('login');
Route::post('/login',[UserController::class,'userAuthenticate']);
Route::get('/logout',[UserController::class,'logout'])->name('logout');


// Form Route
Route::get('/form',[FormController::class,'createForm'])->name('form');
Route::get('/getform/{invoice_no?}',[FormController::class,'getFormDetails'])->name('formdetail');
Route::post('/saveform',[FormController::class,'storeForm'])->name('saveform');
Route::get('/formlist',[FormController::class,'showform'])->name('formlist');



