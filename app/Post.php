<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Comment;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function tags()
    {
    	return $this->belongsToMany(Tag::class, 'posts_tags');
    }

}
