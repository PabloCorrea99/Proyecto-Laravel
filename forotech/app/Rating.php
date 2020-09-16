<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rating extends Model{
    
    protected $fillable = ['post_id','user_id','like','dislike'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getLike()
    {
        return $this->attributes['like'];
    }

    public function setLike($like)
    {
        $this->attributes['like'] = $like;
    }

    public function getDislike()
    {
        return $this->attributes['like'];
    }

    public function setDislike($dislike)
    {
        $this->attributes['dilike'] = $dislike;
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}