<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App;

class HomeController extends Controller
{
   /* 
    public function __construct()
    {  
        $this->middleware('auth');
    }
    */
    
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

    public function changeLang($locale)
    {
        Session::put('applocale',$locale);
        return redirect()->route('home.index');
    }

}
