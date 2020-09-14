<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //attributes id, comment, date
    protected $fillable = ['post'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getTitle()
    {
        return $this->attributes['title'];
    }

    public function setTitle($title)
    {
        $this->attributes['title'] = $title;
    }

    public function getBody()
    {
        return $this->attributes['body'];
    }

    public function setBody($body)
    {
        $this->attributes['body'] = $body;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getDate()
    {
        return $this->attributes['created_at'];
    }

}