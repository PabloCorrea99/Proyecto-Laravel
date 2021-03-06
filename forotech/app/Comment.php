<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //attributes id, comment, date
    protected $fillable = ['user_id','post_id','comment'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getComment()
    {
        return $this->attributes['comment'];
    }

    public function setComment($comment)
    {
        $this->attributes['comment'] = $comment;
    }

    public function getDate()
    {
        return $this->attributes['created_at'];
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
