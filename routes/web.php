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

Route::get('/', function(){
    return view('layouts.arsha.index');
});

//show privacy policy
Route::get('/privacy-policy', function(){
    return view('layouts.arsha.privacy-policy');
});

//show terms of service
Route::get('/terms-of-service', function(){
    return view('layouts.arsha.terms-of-service');
});


//show acceptable use policy
Route::get('/acceptable-use-policy', function(){
    return view('layouts.arsha.acceptable-use-policy');
});
