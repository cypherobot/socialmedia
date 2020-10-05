<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\userprofile;
use Session;

class edituserprofilesubmit extends Controller
{
    //
    public function update(Request $request)
    {
      $id= Auth::user()->name;
      $userdata = userprofile::find($id);
      $userdata->name = $request->get('username');
      $userdata->bio = $request->get('bio');
      $userdata->city = $request->get('city');
      $userdata->dob = $request->get('dob');
      $userdata->save();   
    }
}
