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

Route::get('/', function () {
    return view('layout.master');
    // return view('welcome');
});

Route::prefix('/subject')->group(function(){
    Route::get('/',function(){
        return view('subjet.subject-list');
    });
    Route::get('/add',function(){
        return view('subjet.subject-add');
    });
});

Route::prefix('/student')->group(function(){
    Route::get('/',function(){
        return view('students.student-list');
    });
    Route::get('/add',function(){
        return view('students.student-add');
    });
});

Route::get('/subject', function () {
    return view('subjet.subject-list');
    // return view('welcome');
});
Route::get('/student', function () {
    return view('students.student-list');
    // return view('welcome');
});
