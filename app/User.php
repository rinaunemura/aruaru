<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function aruarus()
    {
        return $this->belongsToMany(Post::class, 'user_favorite', 'user_id', 'favorite_id')->withTimestamps();
    }
    
    public function arune($postId)
    {
        $exist = $this->is_arune($postId);
        
        if ($exist) {
            return false;
        } else {
            $this->aruarus()->attach($postId);
            return true;
        }
    }
     public function notarune($postId)
    {
        $exist = $this->is_arune($postId);
        
        if ($exist) {
            $this->aruarus()->detach($postId);
            return true;
        } else {
            return false;
        }
    }
    public function is_arune($postId){
        return $this->aruarus()->where('favorite_id', $postId)->exists();
    
    }
}
