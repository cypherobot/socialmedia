<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Connection;
use App\Message;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'bio', 'city', 'website', 'school_name', 'college_name', 'dob','profile_image','avatar', 'provider_id', 'provider',
        'access_token'
    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //for getting requested connections
    public function requested_connections()
    {
        return $this->hasMany('App\Connection', 'user_one_id', 'id');
    }

    public function requests_recieved()
    {
        return $this->hasMany('App\Connection', 'user_two_id', 'id');
    }

    // To check specific connection
    public function requested_connection( $id )
    {
        return $this->hasOne('App\Connection', 'user_one_id', 'id')->where([
            [ "user_two_id", "=", $id ]
        ])->first();
    }

    public function request_recieved( $id )
    {
        return $this->hasOne('App\Connection', 'user_two_id', 'id')->where([
            [ "user_one_id", "=", $id ]
        ])->first();
    }

    public function notifications()
    {
        return $this->hasMany('App\Notification', 'notifyto_id', 'id')->latest("datetime");
    }

    public function myPosts()
    {
        return $this->hasMany('App\Post', 'user_id', 'id')->latest();
    }

    public function activities()
    {
        return $this->hasMany('App\UserActivity', 'user_id', 'id')->latest();
    }

    public function notes()
    {
        return $this->hasMany('App\UserNote', 'user_id', 'id')->latest();
    }

    public function connections()
    {
        return $this->requested_connections->merge($this->requests_recieved);
    }

    public function familiarities()
    {
        $familiarities_array = array();
        $connections = $this->connections()->where("status", 2);
        foreach ($connections as $key => $connection) {
            if ( $connection->user_one_id == $this->id ) {
                $familiar_as = $connection->user_one_familiar_as;
            }
            else {
                $familiar_as = $connection->user_two_familiar_as;
            }

            if ( $familiar_as != "" ) {
                if ( ! array_key_exists( "$familiar_as" , $familiarities_array ) ) {
                    $familiarities_array[$familiar_as] = array();
                }

                array_push( $familiarities_array[$familiar_as] , $connection );
            }
            else {
                if ( ! array_key_exists( "Uncategorized" , $familiarities_array ) ) {
                    $familiarities_array["Uncategorized"] = array();
                }

                array_push( $familiarities_array["Uncategorized"] , $connection );
            }
        }

        return $familiarities_array;
    }

    public function media_files()
    {
        return $this->hasManyThrough('App\PostAttachment', 'App\Post', 'user_id', 'post_id', 'id', 'post_id')->latest();
    }

    public function followings()
    {
        return $this->hasMany('App\Follow', 'follower', 'id')->latest();
    }

    public function followers()
    {
        return $this->hasMany('App\Follow', 'followee', 'id')->latest();
    }

    public function following( $id )
    {
        return $this->hasOne('App\Follow', 'follower', 'id')->where([
            [ "followee", "=", $id ]
        ])->first();
    }

    public function isBlocked( $id )
    {
        return $this->hasOne('App\Connection', 'user_one_id', 'id')->where([
            [ "user_two_id", "=", $id ],
            [ "status", "=", 3 ],
        ])->first();
    }

    public function distinct_conversations()
    {
        $sent_messages = Message::where( "sender",$this->id )
                                ->groupBy("receiver")
                                ->get();
        $received_messages = Message::where( "receiver",$this->id )
                                    ->groupBy("sender")
                                    ->get();

        $messages = $sent_messages->merge( $received_messages );
        return $messages;
        // return $this->hasMany('App\Message', 'sender', 'id')
        //             ->union( $this->hasMany('App\Message', 'receiver', 'id')->groupBy("sender") )
        //             ->groupBy("receiver","sender")
        //             ->latest();
    }

    public function messages()
    {
        $sent_messages = $this->hasMany('App\Message', 'sender', 'id')->latest();
        $received_messages = $this->hasMany('App\Message', 'receiver', 'id')->latest();
        
        return $sent_messages->merge( $received_messages );
    }

    public function latest_message( $id )
    {
        return Message::where([
            [ "sender", "=", $this->id ],
            [ "receiver", "=", $id ]
        ])
        ->orWhere([
            [ "sender", "=", $id ],
            [ "receiver", "=", $this->id ],
        ])->latest("created_at")->first();
    }

    public function unread_messages( $id )
    {
        return Message::where([
            [ "sender", "=", $id ],
            [ "receiver", "=", $this->id ],
        ])
        ->whereNull("read_at")
        ->latest();
    }
}
