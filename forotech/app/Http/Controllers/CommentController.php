<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Comments";
        $data["comments"] = Comment::all();

        return view('comment.show')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create Comment";

        return view('comment.create') -> with("data", $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "comment" => "required"
        ]);
        Comment::create($request->only(["comment"]));

        return back()->with('success','Elemento creado satisfactoriamente');
    }

    public function delete(Request $request)
    {
        Comment::destroy($request->only(["commentId"]));
        return redirect()->action("CommentController@show")->with('status', 'Comentario eliminado');
    }

}
