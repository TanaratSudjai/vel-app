<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/showData', [UserController::class, 'ShowData']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/index', function () {
    return view('index');
});


Route::controller(userController::class)->group(function () {
    Route::get('/noaccess', 'noaccess')->middleware('check.age');
    Route::get('/home', 'homepage')->middleware('check.age');
    Route::get('/user', 'user')->middleware('check.age');
});




Route::controller(PostController::class)->group(function () {
    Route::get('/dataPost', 'getPost')->name('showDataPost');
    Route::get('/dataPost/{id}', 'getPostById')->name('showDataPostById');
    Route::post('/dataPost/insertpost', 'InsertPost')->name('insert.post');
});


Route::controller(CommentController::class)->group(function () {
    Route::get('/datacomment', 'getComment')->name('showDataComment');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/studentview', 'getStudent');
    Route::get('/studentview/{id}', 'getStudentById');
    Route::get('/studentviewcount', 'countStudent');
    Route::get('/studentagesum', 'sumAge');
    Route::get('/studentageavg', 'avgAge');
    Route::get('/studentagemax', 'maxAge');
});


Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'getTeacher');
});

