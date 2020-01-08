<?php

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
    return view('index');
});

Route::get('/agenda', 'ActivitieController@index');

Route::get('/wie-wij-zijn', function() {
    return view('brigade.introduction');
});

Route::get('/bestuur', function() {
    return view('brigade.committee');
});

Route::get('/instructeurs', function() {
    return view('brigade.instructors');
});

Route::get('/statuten', function() {
    return view('brigade.statute');
});

Route::get('/diplomas', function() {
    return view('brigade.brevet');
});

Route::get('/gedragsregels', function() {
    return view('brigade.conduct_rules');
});


Route::get('/contributie', function() {
    return view('member.contribution');
});

Route::get('/info-nieuwe-leden', function() {
    return view('member.info_new_member');
});

Route::get('/huishoudelijk-reglement', function() {
    return view('member.domestic_rules');
});

Route::get('/contact', function() {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
