<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Message;
use App\User;

class MessageController extends Controller
{
    public function send_message( Request $request )
    {
        $user = Auth::user();

        $message = new Message;
        $message->sender = $user->id;
        $message->receiver = $request->receiver;
        $message->message_body = $request->message_body;
        $message->save();

        $message->unread_message_count = Message::where([
            [ "sender", "=", $user->id ],
            [ "receiver", "=", $request->receiver ],
        ])
        ->whereNull("read_at")
        ->count();

        return response()->json([
            "success" => true,
            "data" => $message
        ]);
    }

    public function get_message( Request $request )
    {
        $user = Auth::user();

        $message = Message::find( $request->message_id );

        return response()->json([
            "success" => true,
            "message" => $message
        ]);
    }

    public function get_user_messages( Request $request )
    {
        $user = Auth::user();

        $messages = Message::where([
            [ "sender", "=", $user->id ],
            [ "receiver", "=", $request->to_user ],
        ])
        ->orWhere([
            [ "sender", "=", $request->to_user ],
            [ "receiver", "=", $user->id ],
        ])->latest()->get();

        $to_user = User::find( $request->to_user );

        return response()->json([
            "success" => true,
            "conversations" => $messages,
            "to_user" => $to_user,
        ]);
    }

    public function mark_messages_read( Request $request )
    {
        $user = Auth::user();

        $messages = $user->unread_messages( $request->to_user )->update([ "read_at" => date("Y-m-d H:i:s") ]);
    }
}
