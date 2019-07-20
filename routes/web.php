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
return view('home');
});

// Route::get('admin/dashboard', function () {
//     $bread = ['Admin', 'Dashboard'];
//     return view('admin/dashboard', ['bread' => $bread]);
// });

Route::get('admin/messages', function () {
    $bread = ['Admin', 'Messages'];
    return view('admin/messages', ['bread' => $bread]);
});

Route::get('admin', 'Admin\DashboardController@index')->name('dashboard');
Route::get('admin/messages', 'Admin\MessagesController@index')->name('messages');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

