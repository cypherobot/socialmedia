<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function sender_user() {
        return $this->belongsTo('App\User', 'sender');
    }
    
    public function receiver_user() {
        return $this->belongsTo('App\User', 'receiver');
    }
}
