<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;
use App\StudentInfo;
use App\InstructorInfo;
use App\DashboardInputs;

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
        $d =["cal"=>Calendar::all(), "students"=>StudentInfo::all(), "instructors"=>InstructorInfo::all(),"announcements"=>DashboardInputs::all()];

        return json_encode($d);
    }
}
