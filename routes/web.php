<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::resource('students', StudentController::class);

Route::get('/', function () {
    return view('welcome');
});


//https://www.youtube.com/watch?v=lZJi0gWFghk&list=PLjsp2uDzfb3378Gsa2EvLns8nuedyKyEh&index=3