<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;

use App\Follow;
use App\Notification;
use App\UserActivity;

class FollowController extends Controller
{
    public function follow_user( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            try {
                DB::beginTransaction();
                    $follow = Follow::where([
                        [ "follower", "=", $user->id ],
                        [ "followee", "=", $id ],
                    ])->first();
                    if ( ! $follow ) {
                        $follow = new Follow;
                        $follow->follower = $user->id;
                        $follow->followee = $id;
                        $follow->save();
    
                        $notification = new Notification;
                        $notification->notifyto_id = $id;
                        $notification->notifyby_id = $user->id;
                        $notification->type = "started_following";
                        $notification->text = "$user->name has started following you";
                        $notification->save();
    
                        $user_activity = new UserActivity;
                        $user_activity->user_id = $user->id;
                        $user_activity->type = "started_following";
                        $activity_object = [
                            "to_user" => $id,
                        ];
                        $user_activity->activity_object = json_encode( $activity_object );
                        $user_activity->save();
                    }
                    else {
                        return response()->json([
                            "success" => false,
                            "message" => "Already Following!",
                            "errCode" => 0,
                        ]);
                    }
                DB::commit();

                return response()->json([
                    "success" => true,
                    "message" => "Started Following!",
                ]);
            } catch (\Exception $e) {
                DB::rollBack();

                return response()->json([
                    "success" => false,
                    "message" => $e->getMessage(),
                    "errCode" => 1,
                ]);
            }
        } else {
            return response()->json([
                "success" => false,
                "message" => "Login to Follow!",
                "errCode" => 2,
            ]);
        }
        
    }
    public function unfollow_user( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            $follow = Follow::where([
                [ "follower", "=", $user->id ],
                [ "followee", "=", $id ],
            ])->first();
            if ( $follow ) {
                try {
                    DB::beginTransaction();
                        $follow->delete();
        
                            $notification = Notification::where([
                                [ "notifyto_id", "=", $id ],
                                [ "notifyby_id", "=", $user->id ],
                                [ "type", "=", "started_following" ],
                            ])->first();
                            if ( $notification ) {
                                $notification->delete();
                            }
                    DB::commit();
    
                    return response()->json([
                        "success" => true,
                        "message" => "Stoped Following!",
                    ]);
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
                    "message" => "Never Started Following!",
                    "errCode" => 1,
                ]);
            }
        } else {
            return response()->json([
                "success" => false,
                "message" => "Login to Follow!",
                "errCode" => 2,
            ]);
        }
        
    }
}
