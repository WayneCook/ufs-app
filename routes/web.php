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

    $user = User::find(7);

    dd($user->can('create-users'));

    $user->givePermissionsTo('create-tasks','edit-users');

});



Route::get('/', function () {
return view('home');
});



Route::get('/datatable','DatatablesController@getIndex');
Route::get('/anyData','DatatablesController@anyData')->name('datatables.data');

// Admin routes
Route::get('admin/dashboard', 'Admin\DashboardController@index')->name('dashboard');
Route::get('admin/messages', 'Admin\MessagesController@index')->name('messages');
// Route::get('admin/users', 'Admin\UsersController@index');

Route::resource('admin/users', 'Admin\UsersController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

