<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image', 'slug', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Relation with user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation with likes
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Relation with comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
