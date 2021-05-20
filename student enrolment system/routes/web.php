<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddstudentController;
use App\Http\Controllers\AllstudentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CseController;
use App\Http\Controllers\EeeController;
use App\Http\Controllers\BbaController;
use App\Http\Controllers\LawController;
use App\Http\Controllers\EnglishController;


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
    return view('login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});

Route::get('/student_dashboard',[AdminController::class,'view']);
Route::post('/login',[AdminController::class, 'student_login']);

Route::get('/student_profile',[StudentController::class, 'profile']);
Route::get('/student_setting',[StudentController::class, 'setting']);
Route::get('/student_logout',[StudentController::class, 'logout']);
Route::post('/update_student/{student_id}',[StudentController::class, 'setting_update']);


Route::get('/admin_dashboard',[AdminController::class,'show']);
Route::post('/admin_login',[AdminController::class, 'login']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::get('/profile',[AdminController::class, 'profile']);
Route::get('/setting',[AdminController::class, 'setting']);

Route::get('/addstudent',[AddstudentController::class, 'show']);
Route::post('/register',[AddstudentController::class, 'store']);
Route::get('/allstudent',[AllstudentController::class, 'show']);
Route::get('/student_delete/{student_id}',[AllstudentController::class, 'delete']);
Route::get('/student_view/{student_id}',[StudentController::class, 'view']);
Route::get('/student_edit/{student_id}',[StudentController::class, 'edit']);
Route::post('/update/{student_id}',[StudentController::class, 'update']);


Route::get('/addteacher',[TeacherController::class, 'show']);
Route::post('/teacher_register',[TeacherController::class, 'store']);
Route::get('/allteacher',[TeacherController::class, 'view']);

Route::get('/cse',[CseController::class, 'show']);
Route::get('/cse_delete/{student_id}',[CseController::class, 'delete']);

Route::get('/eee',[EeeController::class, 'show']);
Route::get('/eee_delete/{student_id}',[EeeController::class, 'delete']);

Route::get('/bba',[BbaController::class, 'show']);
Route::get('/bba_delete/{student_id}',[BbaController::class, 'delete']);

Route::get('/law',[LawController::class, 'show']);
Route::get('/law_delete/{student_id}',[LawController::class, 'delete']);

Route::get('/english',[EnglishController::class, 'show']);
Route::get('/english_delete/{student_id}',[EnglishController::class, 'delete']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

