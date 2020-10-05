<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    protected $primaryKey = "id";
    protected $table = "post_likes";
}
