<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'login']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('addadmin', [HomeController::class, 'addadmins'])->middleware('isLoggedIn');
Route::get('adduser', [HomeController::class, 'adduser'])->middleware('isLoggedIn');
Route::post('loginusers', [HomeController::class, 'loginUser'])->name('loginusers');
Route::get('alluser', [AdminController::class, 'alluser'])->middleware('isLoggedIn', );
Route::get('birthdays',[AdminController::class,'birthdays'])->middleware('isLoggedIn');
Route::POST('upload_users', [AdminController::class, 'uploaduser'])->middleware('isLoggedIn');
Route::POST('upload_ad', [AdminController::class, 'upload'])->middleware('isLoggedIn');
Route::get('logout', [AdminController::class, 'logout']);
Route::get('profile/{id}', [AdminController::class, 'profile'])->middleware('isLoggedIn');
Route::POST('addprofile/{id}', [AdminController::class, 'addprofile'])->middleware('isLoggedIn');
Route::get('alladmin',[AdminController::class, 'alladmin'])->middleware('isLoggedIn');
Route::get('editadmins/{id}',[AdminController::class, 'editadmin'])->middleware('isLoggedIn');
Route::put('editalladmin/{id}',[AdminController::class, 'editalladmin'])->middleware('isLoggedIn');
Route::put('editalluser/{id}',[AdminController::class, 'editalluser'])->middleware('isLoggedIn');
Route::get('edituser/{id}',[AdminController::class, 'edituser'])->middleware('isLoggedIn');
Route::get('deleteadmin/{id}',[AdminController::class, 'deleteadmin']);
Route::get('deleteuser/{id}',[AdminController::class, 'deleteuser'])->middleware('isLoggedIn');
Route::get('/search', [AdminController::class, 'search']);
Route::get('/sidebar', [AdminController::class, 'sidebar']);
Route::get('/viewbirthday/{id}', [AdminController::class, 'viewbirthday']);
Route::get('wedding',[AdminController::class,'wedding'])->middleware('isLoggedIn');








