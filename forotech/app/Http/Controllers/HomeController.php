<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        /**
        * Create a new controller instance.
        *
        * @return void
        */
        $this->middleware('auth');
    }
    public function index()
    {
        /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Contracts\Support\Renderable
        */
        return view('home.index');
    }
    public function home()
    {
        return redirect()->action('HomeController@index');
    }
}
