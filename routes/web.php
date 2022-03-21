<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\Customer\CustomerAuthenticateController;
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
    if(Session::has('user')) {
        return view('fitapp/index');
    } else {
        return redirect('/sign-in');
    }
});

Route::get('/template', function() {
    return view('fitapp/template');
});

Route::get('/sign-in', function () {
    return view('fitapp/customer/signIn');
});
Route::post('/sign-in', [CustomerAuthenticateController::class, 'signIn']);

Route::get('/sign-up', function () {
    return view('fitapp/customer/signUp');
});
Route::post('/sign-up', [CustomerAuthenticateController::class, 'signUp']);

Route::get('/profile', [CustomerAuthenticateController::class, 'profile']);