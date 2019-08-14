<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Creitive\Breadcrumbs\Breadcrumbs;



class DashboardController extends Controller
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
        ->addCrumb('Dashboard')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();
        return view('admin/dashboard')->with('bread', $bread);
    }

}
