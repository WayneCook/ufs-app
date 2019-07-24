<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\User;


class DatatablesController extends Controller
{

    // public function __construct()
    // {

    // }

    public function getIndex()
    {

        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }

    public function getUserData()
    {
        return Datatables::of(User::query())->make(true);
    }


}
