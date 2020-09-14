<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Posts";
        $data["posts"] = Post::all();

        return view('post.show')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Crear Comentario";

        return view('post.create') -> with("data", $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "body" => "required",
            "title" => "required"
        ]);
        Post::create($request->only(["post"]));

        return back()->with('success','Post creado satisfactoriamente');
    }

    public function delete(Request $request)
    {
        Post::destroy($request->only(["postId"]));
        return redirect()->action("PostController@show")->with('status', 'Post eliminado');
    }

}
