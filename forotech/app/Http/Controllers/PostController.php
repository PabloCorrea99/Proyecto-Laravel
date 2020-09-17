<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Rating;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
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
    public function show($id)
    {
        $data = []; //to be sent to the view
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $id)->get();
        $likes = Rating::where('post_id',$id)
                        ->where("like", 1)
                        ->count();
        $dislikes = Rating::where('post_id',$id)
                        ->where("dislike", 1)
                        ->count();
        $data["title"] = $post->getTitle();
        $data["post"] = $post;
        $data["comments"] = $comments;
        $data["likes"] = $likes;
        $data["dislikes"] = $dislikes;

        return view('post.show')->with("data",$data);
    }

    public function list()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Posts";
        $data["posts"] = Post::all();

        return view('post.list')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Crear Publicación";

        return view('post.create') -> with("data", $data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "body" => "required",
            "title" => "required"
        ]);
        
        $user_id = Auth::id();
        Post::create([
            'user_id' => $user_id,
            'title' => request('title'),
            'body' => request('body'),
            'image'=>request('image')
            
        ]);

        return back()->with('success','Post creado satisfactoriamente');
    }

    public function delete(Request $request)
    {
        Post::destroy($request->only(["postId"]));
        return redirect()->action("PostController@list")->with('status', 'Post eliminado');
    }

}
