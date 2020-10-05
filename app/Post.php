<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = "post_id";

    public function attachments()
    {
        return $this->hasMany('App\PostAttachment', 'post_id', 'post_id');
    }

    public function likes()
    {
        return $this->hasOne('App\PostLike', 'post_id', 'post_id');
    }

    public function comments()
    {
        return $this->hasMany('App\PostComment', 'post_id', 'post_id');
    }
    
}
