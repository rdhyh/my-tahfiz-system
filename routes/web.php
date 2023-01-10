<?php

use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminRequirementController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RequirementController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'course', 'as' => 'course.'], function (){
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::post('/store', [CourseController::class, 'store'])->name('store');
    Route::post('/destroy/{course}', [CourseController::class, 'destroy'])->name('destroy');
    Route::post('/update/{course}', [CourseController::class, 'update'])->name('update');

}) ;

Route::group(['prefix' => 'requirement', 'as' => 'requirement.'], function (){
    Route::get('/', [RequirementController::class, 'index'])->name('index');
    Route::post('/store', [RequirementController::class, 'store'])->name('store');
    Route::post('/destroy/{requirement}', [RequirementController::class, 'destroy'])->name('destroy');
    Route::post('/update/{requirement}', [RequirementController::class, 'update'])->name('update');
}) ;

Route::group(['prefix' => 'adminrequirement', 'as' => 'adminrequirement.'], function (){
    Route::get('/', [AdminRequirementController::class, 'index'])->name('index');
    Route::post('/store', [AdminRequirementController::class, 'store'])->name('store');
    Route::post('/destroy/{requirement}', [AdminRequirementController::class, 'destroy'])->name('destroy');
    Route::post('/update/{requirement}', [AdminRequirementController::class, 'update'])->name('update');
}) ;

Route::group(['prefix' => 'admincourse', 'as' => 'admincourse.'], function (){
    Route::get('/', [AdminCourseController::class, 'index'])->name('index');
    Route::post('/store', [AdminCourseController::class, 'store'])->name('store');
    Route::post('/destroy/{course}', [AdminCourseController::class, 'destroy'])->name('destroy');
    Route::post('/update/{course}', [AdminCourseController::class, 'update'])->name('update');

}) ;

