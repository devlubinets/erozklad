<?php

use App\Http\Controllers\TimetableController;
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


Route::get('/school/timetable', [TimetableController::class, 'show'])
    ->name('school.timetable');

//Route::get('/school/timetable', [TimetableController::class, 'index'])
//    ->name('school.timetable');
