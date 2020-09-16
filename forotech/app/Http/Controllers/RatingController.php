<?php

namespace App\Http\Controllers;

use App\Rating;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller{

    public function like(Request $request){
        $request->validate([
            "type" => "required"
        ]);
        $user_id = Auth::id();
        Rating::create([
            'user_id' => $user_id,
            'post_id' => request('postId'),
            'like' => request('type'),
            'dislike' => 0
        ]);
        return back()->with('success','Te gusta este Post');
    }

    public function disLike(Request $request){
        $request->validate([
            "type" => "required"
        ]);
        $user_id = Auth::id();
        Rating::create([
            'user_id' => $user_id,
            'post_id' => request('postId'),
            'dislike' => request('type'),
            'like' => 0
        ]);
        return back()->with('success','No te gusta este Post');
    }
}