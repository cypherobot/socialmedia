<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Validator;
use Storage;
use App\User;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $validatedData = $this->validate($request, [
            'username' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string'],
            'city' => ['required', 'string', 'min:3'],
            'website' => ['url'],
            'school_name' => ['required', 'string'],
            'college_name' => ['string'],
            'dob' => ['required', 'date'],
        ]);

        $user = User::find( $id );
        if ( $user ) {
            $user->name = $request->username;
            $user->bio = $request->bio;
            $user->city = $request->city;
            $user->website = $request->website;
            $user->school_name = $request->school_name;
            $user->college_name = $request->college_name;
            $user->dob = $request->dob;

            if ( $user->save() ) {
                return redirect("/home")->with( "success" , "Profile has been updated" );
            }
            else {
                return back()->with( "error" , "Error in updating Profile !" );
            }
        }
    }

    public function update_user_profile( Request $request )
    {
        if ( Auth::user() ) {
            $user = Auth::user();
            $cover_image = $request->cover_image;
            $image = $request->image;
            list($type, $image) = explode(';',$image);
            list(, $image) = explode(',',$image);

            $image = base64_decode($image);
            $image_name = $user->id . '_' . time() . '.png';
            if( Storage::put("public/uploads/avatar/$image_name", $image) ) {
                if ( $user->{ $cover_image == "true" ? "cover_image" : "profile_image" } != NULL && $user->{ $cover_image == "true" ? "cover_image" : "profile_image" } != "" ) {
                    Storage::delete("public/uploads/avatar/".$user->{ $cover_image == "true" ? "cover_image" : "profile_image" });
                }
            }

            $user->{ $cover_image == "true" ? "cover_image" : "profile_image" } = $image_name;
            if ( $user->save() ) {
                return response()->json([
                    "success" => true,
                    "src" => url(Storage::url("public/uploads/avatar/".$user->{ $cover_image == "true" ? "cover_image" : "profile_image" })),
                ]);
            }
            else {
                return response()->json([
                    "success" => false,
                    "message" => "Error updating profile image!",
                    "errCode" => 0
                ]);
            }
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "User is not logged in!",
                "errCode" => 1
            ]);
        }
    }


    
       
    

}
