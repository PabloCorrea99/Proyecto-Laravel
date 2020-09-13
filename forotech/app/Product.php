<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //attributes id, name, price, created_at, updated_at, link
    protected $fillable = ['name','price','link'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    
    public function getLink()
    {
        return $this->attributes['link'];
    }

    public function setLink($link)
    {
        $this->attributes['link'] = $link;
    }

}
