<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostAttachment;
use App\PostLike;
use App\PostComment;
use App\Notification;
use App\UserActivity;
use Illuminate\Http\Request;
use Auth;
use DB;

class PostController extends Controller
{
    public function store(Request $request)
    {
        if ( Auth::user() ) {
            // dd( $request->all() );
            try {
                DB::beginTransaction();

                $user = Auth::user();

                // create post
                $post = new Post;
                $post->user_id = $user->id;
                $post->post_body = $request->description;
                $post->tag_connections = isset($request->tag_connections) ? json_encode( $request->tag_connections ) : NULL;
                $post->type = isset($request->attachments) ? "multimedia" : "text";
                $post->save();

                // save attachments and add to DB ( if any )
                if ( isset($request->attachments) && count($request->attachments) > 0 ) {
                    foreach ($request->attachments as $key => $attachment) {
                        $filenameToStore = $post->post_id . "_" . $attachment->getClientOriginalName();
                        if ( $attachment->storeAs( "public/post_attachments" , $filenameToStore ) ) {
                            $post_attachment = new PostAttachment;
                            $post_attachment->post_id = $post->post_id;
                            $post_attachment->type = explode( "/" , $attachment->getClientMimeType() )[0];
                            $post_attachment->attachment = $filenameToStore;
                            $post_attachment->save();

                            if ( isset($request->tag_connections) ) {
                                foreach ($request->tag_connections as $key => $id) {
                                    $notification = new Notification;
                                    $notification->notifyto_id = $id;
                                    $notification->notifyby_id = $user->id;
                                    $notification->type = "post_tag";
                                    $notification->text = "$user->name has tagged you in a post";
                                    $notification->save();
                                }
                            }

                            $user_activity = new UserActivity;
                            $user_activity->user_id = $user->id;
                            $user_activity->type = "post_created";
                            $activity_object = [
                                "post_id" => $post->post_id,
                            ];
                            $user_activity->activity_object = json_encode( $activity_object );
                            $user_activity->save();
                        }
                    }
                }

                DB::commit();

                return redirect("/home")->with("success","Post updated successfully");
            } catch (\Exception $e) {
                DB::rollBack();
                return back()->with("error","An error occured!");
            }
        }
        else {
            return redirect("/login")->with( "error" , "Login to post anything!" );
        }
    }

    // // for liking post
    public function like_user_post( Request $request )
    {
        if ( Auth::user() ) {
            $user = Auth::user();
            if ( $request->post_id ) {
                $post = Post::find( $request->post_id );
                if ( $post ) {
                    $post_like = PostLike::where([
                        [ "post_id", "=", $post->post_id ],
                        [ "liked_by", "=", $user->id ],
                    ])->first();

                    if ( ! $post_like ) {
                        $post_like = new PostLike;
                        $post_like->post_id = $request->post_id;
                        $post_like->liked_by = $user->id;
                        if( $post_like->save() ) {
                            $notification = new Notification;
                            $notification->notifyto_id = $post->user_id;
                            $notification->notifyby_id = $user->id;
                            $notification->type = "post_like";
                            $notification->text = "$user->name has liked your post";
                            $notification->save();

                            $user_activity = new UserActivity;
                            $user_activity->user_id = $user->id;
                            $user_activity->type = "post_liked";
                            $activity_object = [
                                "post_id" => $post->post_id,
                            ];
                            $user_activity->activity_object = json_encode( $activity_object );
                            $user_activity->save();

                            $notification_view = [
                                "to_user" => $notification->notifyto_id,
                                "view" => view('components.notification')->with([ "notification" => $notification ])
                            ];

                            return response()->json([
                                "success" => true,
                                "message" => "Post Liked Successfully!",
                                "notification" => $notification_view
                            ]);
                        }
                        else {
                            return response()->json([
                                "success" => false,
                                "message" => "Post Like failed!",
                                "errCode" => 0
                            ]);
                        }
                    }
                    else
                    {
                        PostLike::where([
                            [ "post_id", "=", $post->post_id ],
                            [ "liked_by", "=", $user->id ],
                        ])->delete();
                       
                        return response()->json([
                            "success" => false,
                            "message" => "You have already Liked this Post!",
                            "errCode" => 1
                        ]);
                    }
                    
                } else {
                    return response()->json([
                        "success" => false,
                        "message" => "Post doesn't exist!",
                        "errCode" => 2
                    ]);
                }
            }
            else {
                return response()->json([
                    "success" => false,
                    "message" => "Post id not present!",
                    "errCode" => 3
                ]);
            }
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "User is not logged in!",
                "errCode" => 4
            ]);
        }
    }



}
