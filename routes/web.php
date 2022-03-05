<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;

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
    return view('fitapp/index');
});

Route::get('/sign-in', function () {
    return view('fitapp/signIn');
});

Route::get('/sign-up', function () {
    return view('fitapp/signUp');
});

Route::post('/sign-up', [AuthenticateController::class, 'signUp']);