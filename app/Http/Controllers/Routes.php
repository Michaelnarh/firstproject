<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routes extends Controller
{
    //
    public function Home()
    {
        return view('Home');
    }
    public function Computer_Science()
    {
        return view('Computer_Science');
    }
    public function Courses()
    {
        return view('Courses');
    }
    public function test()
    {
        return view('test');
    }
}
