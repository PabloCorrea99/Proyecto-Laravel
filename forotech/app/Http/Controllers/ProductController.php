<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $data = []; //to be sent to the view
        $product = Product::findOrFail($id);

        $data["title"] = $product->getName();
        $data["product"] = $product;
        return view('product.show')->with("data",$data);
    }

    public function list()
    {
        $data = []; //to be sent to the view

        $data["products"] = Product::all();
        return view('product.list')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        $data["products"] = Product::all();

        return view('product.create')->with("data",$data);
    }

    public function deleteProduct(Request $request)
    {
        Product::destroy($request->only(["productId"]));
        return view('product.list')->with('success','Producto eliminado correctamente');
    }



    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0",
            "link"=>"required"
        ]);
        Product::create($request->only(["name","price","link"]));

        return back()->with('success','Producto creado correctamente');
    }



}
