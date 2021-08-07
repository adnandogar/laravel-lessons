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

Route::get('/', 'HomeController@index');

Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('dashboard');



//exam controller
Route::get('/admin/exam/create', 'Admin\ExamController@create')->name('exam_create');
Route::post('/admin/exam/store', 'Admin\ExamController@createProceed')->name('exam_create_proceed');
Route::get('/admin/exam/all', 'Admin\ExamController@all')->name('exam_all');
Route::get('/admin/exam/update/{id}', 'Admin\ExamController@update')->name('exam_update');
Route::post('/admin/exam/update-proceed', 'Admin\ExamController@updateProceed')->name('exam_update_proceed');
Route::get('/admin/exam/delete/{id}', 'Admin\ExamController@delete')->name('exam_delete');
