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

Route::get('/blank-page', function () {
    return view('blank-page');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/datatables', function () {
    return view('datatables');
});

Route::get('/form-elements', function () {
    return view('form-elements');
});

Route::get('/form-wizard', function () {
    return view('form-wizard');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/google-maps', function () {
    return view('google-maps');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/locked-screen', function () {
    return view('locked-screen');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/mail-horizontal', function () {
    return view('mail-horizontal');
});

Route::get('/mail', function () {
    return view('mail');
});

Route::get('/nestable', function () {
    return view('nestable');
});

Route::get('/page-offline', function () {
    return view('page-offline');
});

Route::get('/page404', function () {
    return view('page404');
});

Route::get('/page404', function () {
    return view('page500');
});

Route::get('/portlets', function () {
    return view('profile-page');
});

Route::get('/search-results', function () {
    return view('search-results');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/tiles', function () {
    return view('tiles');
});

Route::get('/timeline', function () {
    return view('typography');
});

Route::get('/ui-elements', function () {
    return view('ui-elements');
});

Route::get('/validation-elements', function () {
    return view('validation-elements');
});

Route::get('/vector-maps', function () {
    return view('vector-maps');
});

Route::get('/weather-page', function () {
    return view('weather-page');
});

Route::get('/widgets', function () {
    return view('widgets');
});


