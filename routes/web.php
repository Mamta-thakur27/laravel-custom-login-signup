<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get( 'login', [AdminController::class,'login'])->name('login');
Route::Post( 'login', [AdminController::class,'loginCheck'])->name('login.check');

Route::get( 'signup', [AdminController::class,'signup'])->name('signup');
Route::Post( 'signup', [AdminController::class,'signupCheck'])->name('signup.check');

Route::get( 'dashboard', [AdminController::class,'dashboard'])->name('dash');

// Route::get( 'form', [AdminController::class,'form'])->name('form');
// Route::get('form','admin.form');                            

