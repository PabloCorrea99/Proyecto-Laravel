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
        $post_id = request('postId');
        $type = request('type');
        if($type==1){
            Rating::updateOrCreate(
                ['post_id' => $post_id, 'user_id' => $user_id],
                ['like' => 1, 'dislike'=> 0]
            );
            return back()->with('success','Te gusta este Post');
        } else {
            Rating::updateOrCreate(
                ['post_id' => $post_id, 'user_id' => $user_id],
                ['like' => 0, 'dislike'=> 1]
            );
            return back()->with('success','No te gusta este Post');
        }
    
        
    }
}