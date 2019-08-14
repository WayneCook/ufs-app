<?php

namespace App\Http\Controllers\Admin;

use Creitive\Breadcrumbs\Breadcrumbs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bread = new Breadcrumbs();
        $bread->addCrumb('Admin', 'admin')
        ->addCrumb('Profile')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();
        return view('admin.profile.show', ['bread' => $bread]);
    }
}
