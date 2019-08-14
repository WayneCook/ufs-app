<?php

namespace App\Http\Controllers\Admin;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{


    public function show()
    {
        $bread = new Breadcrumbs();
        $bread->addCrumb('Admin', 'admin')
        ->addCrumb('Change Password')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();
        return view('admin.password.show', ['bread' => $bread]);
    }

    public function store()
    {
        $this->validate(request(), [
            'password' => 'required|string|min:8|confirmed'
        ]);

        request()->user()->fill([
            'password' => Hash::make(request()->input('password'))
        ])->save();

        $notification = array(
            'message' => 'Password changed successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin')->with($notification);

    }


}
