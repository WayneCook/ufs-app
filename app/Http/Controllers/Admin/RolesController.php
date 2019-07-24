<?php

namespace App\Http\Controllers\Admin;
use Creitive\Breadcrumbs\Breadcrumbs;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Permission;
use App\User;
use App\Role;


class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roles = Role::all();

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Roles')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        return view('admin/roles/index', ['roles' => $roles, 'bread' => $breadcrumbs]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $permissions = Permission::all();

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Roles', 'roles')
        ->addCrumb('Create')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();


        return view('admin/roles/create', ['bread' => $breadcrumbs, 'permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:25|min:3',
        ]);

        $role = Role::create([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            ]);

        $role->permissions()->sync($request->permission);


        $notification = array(
            'message' => 'Role created successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/roles')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $role = Role::with('permissions')->find($id);

        $permissions = Permission::all();

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Roles', 'roles')
        ->addCrumb('Edit')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        return view('admin.roles.edit',['role' => $role, 'bread' => $breadcrumbs, 'permissions' => $permissions]);

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
        // dd('update');

        $validatedData = $request->validate([
            'name' => 'required|string|max:25|min:3',
        ]);

        $role = Role::with('permissions')->find($id);

        $role->fill($request->all());

        $role->permissions()->sync($request->permission);

        $role->save();

        $notification = array(
            'message' => 'Role created successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/roles')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $role = Role::findOrFail($id);

        $role->delete();

            $notification = array(
                'message' => 'Role deleted successfully!',
                'alert-type' => 'success'
            );
            return redirect('admin/roles')->with($notification);

    }
}
