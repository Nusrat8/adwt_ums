<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\LoginController;

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

/** Fahim -> teacher, assignment, notice */

/** Jasun -> student, course, lectureNote */

/** Rafi -> admin, grade, leaveApplication */

/** Keya -> accountant, transaction, login */


Route::get('/', [AccountantController::class,'home'])->name('home');

// Route::get('/profile',[AccountantController::class,'profile'])->name('profile');
Route::get('/profile/{id}',[AccountantController::class,'profile']);

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
//Route::get('/accountant/profile/{id}',[AccountantController::class,'update']);
Route::post('/profile/{id}',[AccountantController::class,'updateSubmit']);
Route::get('/index',[AccountantController::class,'index'])->name('index');
Route::get('/changepass',[LoginController::class,'changepass'])->name('changepass');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[AccountantController::class,'register'])->name('register');
Route::post('/register',[AccountantController::class,'registerSubmit'])->name('register');

Route::get('/list',[AccountantController::class,'list'])->name('list');




/*Route::get('/', function () {
    // dd(Student::find(1)->courses);
   return Course::find(1)->coursesDetails;
}); */
