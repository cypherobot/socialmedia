<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Notification;
use App\PostComment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()) {
            $user = Auth::user();
            $suggestions = User::where("id", "!=", $user->id)->inRandomOrder()->get();
            return view('home')->with(["user" => $user, "suggestions" => $suggestions]);
        } else {
            return redirect("/login");
        }
    }

    function userprofile($id = null)
    {
        if ($id) {
            $user = User::find($id);
            if ($user) {
                return view('userprofile', ['user' => $user]);
            } else {
                return response()->json([
                    "success" => false,
                    "message" => "User not found!"
                ]);
            }
        } else {
            return view('userprofile', ['user' => Auth::user()]);
        }
    }

    public function clear_all_notifications()
    {
        if (Auth::user()) {
            $user = Auth::user();

            try {
                $notifications = Notification::where("notifyto_id", $user->id)->update(["seenstatus" => 1]);

                return response()->json([
                    "success" => true,
                    "message" => "All notifications Cleared",
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
                "message" => "Login to Clear Notification!",
                "errCode" => 1,
            ]);
        }
    }

    function messagenotification()
    {
        // dd( Auth::user()->latest_message( 2 )->whereNull("read_at")->get() );


        $user = auth()->user();
        $suggestions = User::where("id", "!=", $user->id)->inRandomOrder()->get();
        return view('messagenotification' , compact('user', 'suggestions'))->with([ "user" => Auth::user() ]);
    }

    public function SaveComment(Request $request){
        $postcomment = New PostComment();
        $postcomment->post_id = $request->post_id;
        $postcomment->commented_by = auth()->user()->id;       
        $postcomment->comment = $request->comment_text;
        $postcomment->save();
     }
}
