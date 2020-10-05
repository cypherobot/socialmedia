<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table="users_all_notifications";
    public $timestamps=false;

    protected $fillable = [
        "notifyto_id", "notifyby_id", "seenstatus", "datetime"
    ];
}
