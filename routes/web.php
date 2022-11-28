<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\postingController;
use App\Http\Controllers\ComplaintController;

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
    return view('landing2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------admin------------------------------------------*/
Route::get('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'show_data_admin']);
/*add tecaher*/
Route::get('/addteacher',[AdminController::class,'createteacher']);
Route::post('/addteacher_form',[AdminController::class,'addteacher']);
Route::get('/deleteteacher/{id}',[AdminController::class,'deleteteacher']);
Route::get('/edit/{id}',[AdminController::class,'show_edit_teacher']);
Route::post('/update_teacher_form',[AdminController::class,'update']);
Route::get('/search',[AdminController::class,'searchdata']);

/*------------------ school --------------------------------------*/
Route::get('/school',[AdminController::class,'schoolpage']);
Route::get('/addschool',[AdminController::class,'addschool']);
Route::post('/addschool_form',[AdminController::class,'addschoolform']);
Route::get('/update-page_school/{id}',[AdminController::class,'show_update_page']);
Route::post('/updateschool_form',[AdminController::class,'update_school_form']);
Route::get('/delete-data_school/{id}',[AdminController::class,'deleteschool']);






/*-----------------------------teacher profile login------------------------------*/


Route::get('/teacherloginpage', [App\Http\Controllers\HomeController::class, 'teacherlogin']);
Route::get('/teacher_dashboard', [App\Http\Controllers\HomeController::class, 'teachershow']);

/*---------------------------------complaint  -------------------------------*/
Route::get('/complaintpage', [App\Http\Controllers\ComplaintController::class, 'showcomplaintpage']);
Route::post('/complaint_form',[ComplaintController::class,'risecomplaint']);
Route::get('/show_complaint_rised', [ComplaintController::class, 'show_complaint_rised']);
Route::get('/show_complaint_update_page/{id}',[ComplaintController::class,'showcomplaintupdatepage']);
Route::post('/update_complaint_form',[ComplaintController::class,'save_complaintupdatepage']);
Route::post('/search_date_wise_complaint', [ComplaintController::class,'search']);


/*-------------------------------  posting  -------------------------------  */
/*/{{$t->id}}*/
/*/{id}*/
Route::get('/posting/{id}',[postingController::class,'show_posting_page']);
Route::post('/posting_teacher', [postingController::class,'posting_teacher']);


Route::get('/teacher-postings',[postingController::class,'teacherPosting']);
