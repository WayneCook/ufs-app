<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Message;
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
        return Datatables::of(User::whereDoesntHave('roles', function ($query) {
            $query->where('slug', '=', 'super-admin');
        })->get())->make(true);
    }

    public function getUserData()
    {
        return Datatables::of(User::whereDoesntHave('roles', function ($query) {
            $query->where('slug', '=', 'super-admin');
        })->get())->make(true);

    }

    public function getMessageData()
    {
        return Datatables::of(Message::all())->make(true);

    }


}
