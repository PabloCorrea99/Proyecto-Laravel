<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class FoodController extends Controller
{
    
    public function showProducts()
    {
        /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Contracts\Support\Renderable
        */
        $data = file_get_contents("http://www.agricolae.tk/public/api/products");
        $items = json_decode($data, true);
        return view('food.food')->with("data",$items);
    }
}