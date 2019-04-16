<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function show()
    {
        $d =["msg"=>Calendar::all()];

        return json_encode($d);
    }
}
