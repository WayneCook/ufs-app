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

    $role = Role::where('slug', 'member')->get();


    $user = User::with('roles')->find(4);
    $user->roles()->attach($role);


    dd($user);

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

Route::resource('admin/users', 'Admin\UsersController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

