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
//Route that sends back
Route::get('/', function () {
    return view('home');
});

//route to users - string
Route::get('/user', function () {
    return 'Welcome to the Jungle';
});

//route to users - Array
Route::get('/users', function () {
    return ['for a test','tey','hey'];
});

//route to users - json object
Route::get('/users', function () {
    return response()->json([
        'name' => 'Floyd',
        'course' => 'laravel course'
    ]);
});

//route to home page
Route::get('/home', function () {
    return redirect('/');
});

//route to login page
Route::get('/login', function () {
    return view('login');
});

//route to signup page
Route::get('/signup', function () {
    return view('signup');
});
