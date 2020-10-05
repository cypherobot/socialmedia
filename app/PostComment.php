<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $primaryKey = "id";
    protected $table = "post_comments";
}
