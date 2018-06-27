<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function aruarus()
    {
        return $this->belongsToMany(Post::class, 'user_favorite', 'favorite_id', 'user_id')->withTimestamps();
    }
}
