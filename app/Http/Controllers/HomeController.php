<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Page $page)
    {
        // $count = views($page->home())->record();

        return view('home');
    }
}
