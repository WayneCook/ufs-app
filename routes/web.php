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


Route::get('/', 'HomeController@index')->name('home');

Route::get('/test', function(){
    return view('newHome');
});


// Admin routes
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('admin', 'Admin\DashboardController@index');
    Route::get('admin/messages', 'Admin\MessagesController@index')->name('messages');
    Route::get('admin/messages/markAllRead', 'Admin\MessagesController@markAllRead');
    Route::resource('admin/users', 'Admin\UsersController');
    Route::resource('admin/profile', 'Admin\ProfileController');
    Route::get('/getUserData','DatatablesController@getUserData')->name('datatables.getUserData');
    Route::get('/getMessageData','DatatablesController@getMessageData')->name('datatables.getMessageData');
    Route::resource('admin/roles', 'Admin\RolesController')->middleware('can:manage-roles');
    Route::resource('admin/permissions', 'Admin\PermissionsController');
    Route::resource('admin/messages', 'Admin\MessagesController');
    Route::get('admin/password/change','Admin\ChangePasswordController@show');
    Route::get('admin/password/store','Admin\ChangePasswordController@store');

});


Route::get('/datatable','DatatablesController@getIndex');

Route::resource('message/send', 'Admin\MessagesController');


Auth::routes();


