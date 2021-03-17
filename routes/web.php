<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/student',[StudentController::class,'index']);
Route::get('/student/list/',[StudentController::class,'viewAllStudents']);
Route::post('/student/store/',[StudentController::class,'insertStudent']);
Route::get('/student/edit/{id}',[StudentController::class,'editStudent']);
Route::post('/student/delete/{student_id}',[StudentController::class,'deleteStudent']);
Route::post('/student/update/{student_id}',[StudentController::class,'UpdateStudent']);