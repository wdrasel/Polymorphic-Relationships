<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function image()
    {
        return $this->morphOne(Image::class, 'imageablee');
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentablee');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class , 'taggablee');
    }
}
