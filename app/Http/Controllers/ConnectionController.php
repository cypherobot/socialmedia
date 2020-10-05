<?php

namespace App\Http\Controllers;

use App\Connection;
use App\Notification;
use App\UserActivity;
use Auth;
use DB;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    public function request_connection( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            try {
                DB::beginTransaction();

                    $connection = new Connection;
                    $connection->user_one_id = $user->id;
                    $connection->user_two_id = $id;
                    $connection->save();

                    $notification = new Notification;
                    $notification->notifyto_id = $id;
                    $notification->notifyby_id = $user->id;
                    $notification->type = "connection_request";
                    $notification->text = "$user->name has sent you a connection request";
                    $notification->save();

                    $user_activity = new UserActivity;
                    $user_activity->user_id = $user->id;
                    $user_activity->type = "requested_connection";
                    $activity_object = [
                        "to_user" => $id,
                    ];
                    $user_activity->activity_object = json_encode( $activity_object );
                    $user_activity->save();

                DB::commit();

                return response()->json([
                    "success" => true,
                    "message" => "Request has been sent!",
                ]);
                // return back()->with("success","Request has been sent");
            } catch (\Exception $e) {
                DB::rollBack();

                return response()->json([
                    "success" => false,
                    "message" => $e->getMessage(),
                    "errCode" => 0,
                ]);
            }
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "Login to Request!",
                "errCode" => 1,
            ]);

            // return back()->with("error","!");
        }
    }

    public function cancel_connection_request( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            $connection = Connection::where([
                [ 'user_one_id', "=", $user->id ],
                [ 'user_two_id', "=", $id ],
            ])->first();
            if ( $connection ) {
                try {
                    DB::beginTransaction();

                        $connection->delete();

                        $notification = Notification::where([
                            [ "notifyto_id", "=", $id ],
                            [ "notifyby_id", "=", $user->id ],
                            [ "type", "=", "connection_request" ]
                        ])->first();
                        if ( $notification ) {
                            $notification->delete();
                        }

                        $user_activity = new UserActivity;
                        $user_activity->user_id = $user->id;
                        $user_activity->type = "connection_request_cancelled";
                        $activity_object = [
                            "to_user" => $id,
                        ];
                        $user_activity->activity_object = json_encode( $activity_object );
                        $user_activity->save();
                    
                    DB::commit();

                    return response()->json([
                        "success" => true,
                        "message" => "Request has been cancelled!",
                    ]);
                } catch (\Exception $e) {
                    DB::rollBack();
    
                    return response()->json([
                        "success" => false,
                        "message" => $e->getMessage(),
                        "errCode" => 0,
                    ]);
                }
            }
            else {
                return response()->json([
                    "success" => false,
                    "message" => "Connection doesn't exist!",
                    "errCode" => 1,
                ]);
            }
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "Login to cancel Request!",
                "errCode" => 2,
            ]);

            // return back()->with("error","Login to cancel Request!");
        }
    }

    public function decline_connection_request( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            $connection = Connection::where([
                [ 'user_one_id', "=", $id ],
                [ 'user_two_id', "=", $user->id ],
            ])->first();
            if ( $connection ) {
                try {
                    DB::beginTransaction();
                        $connection->delete();

                        $notification = Notification::where([
                            [ "notifyto_id", "=", $user->id ],
                            [ "notifyby_id", "=", $id ],
                            [ "type", "=", "connection_request" ]
                        ])->first();
                        if ( $notification ) {
                            $notification->delete();
                        }

                        $user_activity = new UserActivity;
                        $user_activity->user_id = $user->id;
                        $user_activity->type = "connection_request_declined";
                        $activity_object = [
                            "from_user" => $id,
                        ];
                        $user_activity->activity_object = json_encode( $activity_object );
                        $user_activity->save();
                    DB::commit();

                    return response()->json([
                        "success" => true,
                        "message" => "Request has been declined!",
                    ]);

                    // return back()->with("success","Request has been declined");
                } catch (\Exception $e) {
                    DB::rollBack();
    
                    return response()->json([
                        "success" => false,
                        "message" => $e->getMessage(),
                        "errCode" => 0,
                    ]);
                }
            } else {
                return response()->json([
                    "success" => false,
                    "message" => "Connection doesn't exist",
                    "errCode" => 1,
                ]);

                // return back()->with("error","An Error Occurred!");
            }
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "Login to decline Request!",
                "errCode" => 2,
            ]);

            // return back()->with("error","Login to decline Request!");
        }
    }

    public function accept_connection_request( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            $connection = Connection::where([
                [ 'user_one_id', "=", $id ],
                [ 'user_two_id', "=", $user->id ],
            ])->first();
            if ( $connection ) {
                try {
                    DB::beginTransaction();
                        $connection->status = 2;
                        $connection->seenstatus = 1;
                        $connection->save();

                        $notification = Notification::where([
                            [ "notifyto_id", "=", $user->id ],
                            [ "notifyby_id", "=", $id ],
                            [ "type", "=", "connection_request" ]
                        ])->first();
                        if ( $notification ) {
                            $notification->seenstatus = 1;
                            $notification->save();
                        }

                        $user_activity = new UserActivity;
                        $user_activity->user_id = $user->id;
                        $user_activity->type = "connection_request_accepted";
                        $activity_object = [
                            "from_user" => $id,
                        ];
                        $user_activity->activity_object = json_encode( $activity_object );
                        $user_activity->save();
                    DB::commit();

                    return response()->json([
                        "success" => true,
                        "message" => "Request has been accepted!",
                    ]);

                    // return back()->with("success","Request has been accepted");
                } catch (\Exception $e) {
                    DB::rollBack();
    
                    return response()->json([
                        "success" => false,
                        "message" => $e->getMessage(),
                        "errCode" => 0,
                    ]);

                    // return back()->with("error","An Error Occurred!");
                }
            } else {
                return response()->json([
                    "success" => false,
                    "message" => "Connection doesn't exist",
                    "errCode" => 1,
                ]);

                // return back()->with("error","An Error Occurred!");
            }
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "Login to accept Request!",
                "errCode" => 2,
            ]);

            // return back()->with("error","Login to accept Request!");
        }
    }

    public function remove_connection( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            $connection = Connection::where([
                [ 'user_one_id', "=", $id ],
                [ 'user_two_id', "=", $user->id ],
            ])->first();
            if ( $connection ) {
                try {
                    DB::beginTransaction();

                        $connection->delete();

                        $notification = Notification::where([
                            [ "notifyto_id", "=", $id ],
                            [ "notifyby_id", "=", $user->id ],
                            [ "type", "=", "connection_request" ]
                        ])->first();
                        if ( $notification ) {
                            $notification->delete();
                        }

                        $user_activity = new UserActivity;
                        $user_activity->user_id = $user->id;
                        $user_activity->type = "connection_removed";
                        $activity_object = [
                            "to_user" => $id,
                        ];
                        $user_activity->activity_object = json_encode( $activity_object );
                        $user_activity->save();
                    
                    DB::commit();

                    return response()->json([
                        "success" => true,
                        "message" => "Connection has been removed!",
                    ]);
                    // return back()->with("success","Request has been cancelled");
                } catch (\Exception $e) {
                    DB::rollBack();
    
                    return response()->json([
                        "success" => false,
                        "message" => $e->getMessage(),
                        "errCode" => 0,
                    ]);
                }
            } else {
                $connection = Connection::where([
                    [ 'user_one_id', "=", $user->id ],
                    [ 'user_two_id', "=", $id ],
                ])->first();
                if ( $connection ) {
                    try {
                        DB::beginTransaction();
    
                            $connection->delete();
    
                            $notification = Notification::where([
                                [ "notifyto_id", "=", $id ],
                                [ "notifyby_id", "=", $user->id ],
                                [ "type", "=", "connection_request" ]
                            ])->first();
                            if ( $notification ) {
                                $notification->delete();
                            }
    
                            $user_activity = new UserActivity;
                            $user_activity->user_id = $user->id;
                            $user_activity->type = "connection_removed";
                            $activity_object = [
                                "to_user" => $id,
                            ];
                            $user_activity->activity_object = json_encode( $activity_object );
                            $user_activity->save();
                        
                        DB::commit();
    
                        return response()->json([
                            "success" => true,
                            "message" => "Connection has been removed!",
                        ]);
                        // return back()->with("success","Request has been cancelled");
                    } catch (\Exception $e) {
                        DB::rollBack();
        
                        return response()->json([
                            "success" => false,
                            "message" => $e->getMessage(),
                            "errCode" => 0,
                        ]);
                    }
                }
                else {
                    return response()->json([
                        "success" => false,
                        "message" => "Connection doesn't exist!",
                        "errCode" => 1,
                    ]);
    
                    // return back()->with("error","An Error Occurred!");
                }
            }
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "Login to accept Request!",
                "errCode" => 2,
            ]);

            // return back()->with("error","Login to accept Request!");
        }
    }

    public function update_familiarity( Request $request, $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            $connection = Connection::where([
                [ 'user_one_id', "=", $id ],
                [ 'user_two_id', "=", $user->id ],
            ])->first();
            if ( $connection ) {
                try {
                    DB::beginTransaction();
                        $connection->user_two_familiar_as = $request->familiar_as;
                        $connection->save();

                        $user_activity = new UserActivity;
                        $user_activity->user_id = $user->id;
                        $user_activity->type = "familiarity_updated";
                        $activity_object = [
                            "with_user" => $id,
                        ];
                        $user_activity->activity_object = json_encode( $activity_object );
                        $user_activity->save();
                    DB::commit();
    
                    return response()->json([
                        "success" => true,
                        "message" => "Familiarity has been updated!",
                    ]);
                } catch (\Exception $e) {
                    DB::rollBack();
    
                    return response()->json([
                        "success" => false,
                        "message" => $e->getMessage(),
                        "errCode" => 0,
                    ]);
                }
            }
            else {
                $connection = Connection::where([
                    [ 'user_one_id', "=", $user->id ],
                    [ 'user_two_id', "=", $id ],
                ])->first();
                if ( $connection ) {
                    try {
                        DB::beginTransaction();
                            $connection->user_one_familiar_as = $request->familiar_as;
                            $connection->save();

                            $user_activity = new UserActivity;
                            $user_activity->user_id = $user->id;
                            $user_activity->type = "familiarity_updated";
                            $activity_object = [
                                "with_user" => $id,
                            ];
                            $user_activity->activity_object = json_encode( $activity_object );
                            $user_activity->save();
                        DB::commit();
        
                        return response()->json([
                            "success" => true,
                            "message" => "Familiarity has been updated!",
                        ]);
                    } catch (\Exception $e) {
                        DB::rollBack();
        
                        return response()->json([
                            "success" => false,
                            "message" => $e->getMessage(),
                            "errCode" => 1,
                        ]);
                    }
                }
                else {
                    return response()->json([
                        "success" => false,
                        "message" => "Connection doesn't exist!",
                        "errCode" => 2,
                    ]);
                }
            }
        } else {
            return response()->json([
                "success" => false,
                "message" => "Login to update Familiarity!",
                "errCode" => 3,
            ]);
        }
        
    }

    public function block_user( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            try {
                $connection = Connection::where([
                    [ "user_one_id", "=", $user->id ],
                    [ "user_two_id", "=", $id ],
                ])->first();
                if ( ! $connection ) {
                    $connection = Connection::where([
                        [ "user_one_id", "=", $id ],
                        [ "user_two_id", "=", $user->id ],
                    ])->first();

                    if ( ! $connection ) {
                        $connection = new Connection;
                    }
                }

                $connection->user_one_id = $user->id;
                $connection->user_two_id = $id;
                $connection->status = 3; // status blocked : 3
                $connection->save();

                return response()->json([
                    "success" => true,
                    "message" => "User Blocked!"
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "success" => false,
                    "message" => $e->getMessage(),
                    "errCode" => 0,
                ]);
            }
        } else {
            return response()->json([
                "success" => false,
                "message" => "Login to Block someone!",
                "errCode" => 1,
            ]);
        }
    }

    public function unblock_user( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            try {
                $connection = Connection::where([
                    [ "user_one_id", "=", $user->id ],
                    [ "user_two_id", "=", $id ],
                    [ "status", "=", 3 ],
                ])->first();
                if ( ! $connection ) {
                    return response()->json([
                        "success" => false,
                        "message" => "You have not blocked this user!",
                        "errCode" => 0,
                    ]);
                }

                $connection->delete();

                return response()->json([
                    "success" => true,
                    "message" => "User Unblocked!"
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "success" => false,
                    "message" => $e->getMessage(),
                    "errCode" => 1,
                ]);
            }
        } else {
            return response()->json([
                "success" => false,
                "message" => "Login to Unblock someone!",
                "errCode" => 2,
            ]);
        }
    }
}
