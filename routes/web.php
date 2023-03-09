<?php

use Illuminate\Support\Facades\Route;

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



// Test Routes delete after Merge with API
Route::get('/', function () {
    return view('Accounts.Pages.Main');
});
Route::get('/Garage', function () {
    return view('Accounts.Pages.Garage');
});


// Auth
Route::get('/Login', function () {
    return view('Auth.Login');
});
Route::get('/Register', function () {
    return view('Auth.Register');
});
//

//
