<?php

namespace App\Http\Controllers;

use App\UserNote;
use Auth;
use DB;
use Illuminate\Http\Request;

class UserNoteController extends Controller
{
    public function store(Request $request)
    {
        if ( Auth::user() ) {
            try {
                $user = Auth::user();
    
                DB::beginTransaction();
    
                $note = new UserNote;
                $note->user_id = $user->id;
                $note->title = $request->title;
                $note->body = $request->body;
                $note->save();

                DB::commit();

                return response()->json([
                    "success" => true,
                    "message" => "Note added successfully!",
                    "note" => view("components.user_note")->with([ "note" => $note ])->render()
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                
                return response()->json([
                    "success" => false,
                    "message" => $e->getMessage(),
                    "errCode" => 0
                ]);
            }
            
        } else {
            # code...
        }
    }

    public function destroy( $id )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            $note = UserNote::find( $id );
            if ( $note ) {
                if ( $user->id == $note->user_id ) {
                    try {
                        $note->delete();

                        return response()->json([
                            "success" => true,
                            "message" => "Note deleted successfully!",
                        ]);
                    } catch (\Exception $e) {
                        return response()->json([
                            "success" => false,
                            "message" => $e->getMessage(),
                            "errCode" => 0
                        ]);
                    }
                }
                else {
                    return response()->json([
                        "success" => false,
                        "message" => "You are not authorized to perform this task!",
                        "errCode" => 1
                    ]);
                }
            }
            else {
                return response()->json([
                    "success" => false,
                    "message" => "Note doesn't exist!",
                    "errCode" => 2
                ]);
            }
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "You should be logged into perform this action!",
                "errCode" => 3
            ]);
        }
    }
}
