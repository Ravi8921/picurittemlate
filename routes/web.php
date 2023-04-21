<?php

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

// index routing via Route feature
Route::redirect('/', '/Dashboards/Elearning');


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
*/
Route::prefix('Dashboards')->group(function () {
    Route::redirect('/', '/Dashboards/Elearning');
    Route::view('Elearning', 'dashboards/elearning');
    Route::view('School', 'dashboards/school');
});

Route::prefix('Course')->group(function () {
    Route::redirect('/', '/Course/Explore');
    Route::view('Explore', 'course/explore');
    Route::view('List', 'course/list');
    Route::view('TeacherList', 'course/TeacherList');
    Route::view('Detail', 'course/detail');
});


Route::prefix('Users')->group(function () {
    Route::redirect('/', '/Users/List');
    Route::view('List', 'quiz/list');
    Route::view('Detail', 'quiz/detail');
    Route::view('Result', 'quiz/result');

});
Route::prefix('Manage')->group(function () {
    Route::redirect('/', '/manage/prices');
    Route::view('Prices', 'manage/prices');
    Route::view('Coupons', 'manage/coupons');
   
});
Route::prefix('Blogs')->group(function () {
    Route::redirect('/', '/blogs/List');
    Route::view('List', 'blogs/list');
    Route::view('Detail', 'blogs/detail');

});
Route::prefix('Chats')->group(function () {
    Route::redirect('/', '/apps/chats');
    Route::view('chats', 'apps/chats');
    Route::view('mails', 'apps/mails');
    Route::view('manager', 'apps/manager');

});

// Route::prefix('Manager')->group(function () {
//     Route::redirect('/', '/managerdetails/manager');
//     Route::view('Manager', 'managerdetails/manager');
// });



Route::prefix('Path')->group(function () {
    Route::redirect('/', '/Path/List');
    Route::view('List', 'path/list');
    Route::view('Detail', 'path/detail');
});

Route::prefix('Instructor')->group(function () {
    Route::redirect('/', '/Instructor/List');
    Route::view('List', 'instructor/list');
    Route::view('Detail', 'instructor/detail');
});

Route::prefix('Misc')->group(function () {
    Route::redirect('/', '/Misc/Player');
    Route::view('Player', 'misc/player');
    Route::view('Material', 'misc/material');
    Route::view('Syllabus', 'misc/syllabus');
});