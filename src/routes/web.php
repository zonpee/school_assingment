<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exam_Controller;
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

/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', [Exam_Controller::class, 'index']);

Route::get('/login', function () {
    return view('login');
});


Route::get('/useradd', function () {
    return view('useradd');
});

Route::get('/test', function () {
    return view('test');
});