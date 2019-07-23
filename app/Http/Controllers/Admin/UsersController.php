<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersController extends Controller
{

    protected $redirectTo = 'admin/users';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin/dashboard')
        ->addCrumb('Users')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        $count = User::all()->count();

        // dd($count);

        return view('admin/users/show',  ['bread' => $breadcrumbs, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin/dashboard')
        ->addCrumb('Users', 'users')
        ->addCrumb('Create')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        return view('admin.users.create', ['bread' => $breadcrumbs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            ]);

        $role = Role::where('slug','member')->first();

        $user->roles()->attach($role);

        $notification = array(
            'message' => 'User created successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/users')->with($notification);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::findOrFail($id);

        $roles = Role::where('slug', '!=', 'owner')->get();

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Users', 'users')
        ->addCrumb('Edit')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        return view('admin.users.edit',['user' => $user, 'bread' => $breadcrumbs, 'roles' => $roles]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'bail|required|max:25|min:3',
            'email' => 'bail|required|email|max:50|min:5',
            'role' => 'bail|required',
        ]);

        $data = $request->all();
        // Get and update user data
        $user = User::with('roles')->find($id);
        $user->fill($data);
        // Remove user roles
        $user->roles()->sync([]);
        // Set user role
        $role = Role::find($data['role']);
        $user->roles()->attach($role);
        $user->save();
        // Generate toast notification
        $notification = array(
            'message' => 'User updated successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/users')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findOrfail($id);

        $user->delete();

        $notification = array(
            'message' => 'User deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/users')->with($notification);

    }
}
