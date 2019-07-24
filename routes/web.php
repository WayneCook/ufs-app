<?php
use App\User;
use App\Role;

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

Route::get('/roles', function () {


    // $user = User::with('roles')->where('name', 'dimitri cook')->first();
    $user = User::with('roles')->where('name', 'dimitri cook')->first();

    dd($user);
});



Route::get('/', function () {
return view('home');
});


// Admin routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('admin/messages', 'Admin\MessagesController@index')->name('messages');
    Route::resource('admin/users', 'Admin\UsersController');
    Route::get('/getUserData','DatatablesController@getUserData')->name('datatables.getUserData')->middleware('role:admin');
});



Route::get('/datatable','DatatablesController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

