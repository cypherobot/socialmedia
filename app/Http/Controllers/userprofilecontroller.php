<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\userprofile;
use Session;
class userprofilecontroller extends Controller
{
    //
    public function index()
    {
        $user = userprofile::where('id','2');
        return view('userprofile',['user'=>$userdata]);
    }
}
