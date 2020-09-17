<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function show()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Comments";
        $data["comments"] = Comment::all();

        return view('comment.show')->with("data",$data);
    }

    public function save(Request $request)
    {
        $user_id = Auth::id();
        $post_id = $request->only(["postId"]);
        $poststring_id=implode("",$post_id);
        $request->validate([
            "comment" => "required"
        ]);
        Comment::create([
            'user_id' => $user_id,
            'post_id' => $poststring_id,
            'comment' => request('comment')
        ]);

        return back()->with('success','Elemento creado satisfactoriamente');
    }

    public function delete(Request $request)
    {
        Comment::destroy($request->only(["commentId"]));
        return redirect()->action("CommentController@show")->with('status', 'Comentario eliminado');
    }
}
