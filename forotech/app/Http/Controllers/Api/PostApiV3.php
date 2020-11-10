<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostApiV3 extends Controller
{
    public function index()
    {
        return new PostCollection(PostResource::collection(Post::all()));
    }

    public function paginate()
    {
        return new PostCollection(PostResource::collection(Post::paginate(5)));
    }
}
