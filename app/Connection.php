<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    protected $table="users_connections";
    public $timestamps=false;

    protected $fillable = [
        "user_one_id", "user_two_id", "status"
    ];
}
