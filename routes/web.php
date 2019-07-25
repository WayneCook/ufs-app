<?php
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

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


    $user = User::where('name', 'Wayne Cook')->get()->first();

    dd(Auth::user()->roles());


});



Route::get('/', function () {
return view('home');
});


// Admin routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', 'Admin\DashboardController@index');

    Route::get('admin/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('admin/messages', 'Admin\MessagesController@index')->name('messages');
    Route::resource('admin/users', 'Admin\UsersController');
    Route::get('/getUserData','DatatablesController@getUserData')->name('datatables.getUserData');
    Route::resource('admin/roles', 'Admin\RolesController')->middleware('can:manage-roles');
    Route::resource('admin/permissions', 'Admin\PermissionsController');
});



Route::get('/datatable','DatatablesController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

