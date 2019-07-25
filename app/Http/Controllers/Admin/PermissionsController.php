<?php

namespace App\Http\Controllers\Admin;

use Creitive\Breadcrumbs\Breadcrumbs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Permission;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Permissions')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        return view('admin/permissions/index',['permissions' => $permissions, 'bread' => $breadcrumbs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Permissions', 'permissions')
        ->addCrumb('Create')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        return view('admin/permissions/create', ['bread' => $breadcrumbs]);
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

        $role = Permission::create([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            ]);

        $notification = array(
            'message' => 'Permission created successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/permissions')->with($notification);




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

        $permission = Permission::findOrFail($id);
        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Permissions', 'permissions')
        ->addCrumb('Edit')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        return view('admin/permissions/edit', ['permission' => $permission, 'bread' => $breadcrumbs]);

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
            'name' => 'required|string|max:25|min:3',
        ]);

        $role = Permission::findOrFail($id);
        $role->name = $request->name;
        $role->slug = str_slug($request->name);
        $role->save();

        $notification = array(
            'message' => 'Role updated successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/permissions')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();

        $notification = array(
            'message' => 'Role deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/permissions')->with($notification);

    }
}
