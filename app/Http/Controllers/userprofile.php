<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;

class userprofile extends Controller
{
    //
    function save(Request $req)
    {
        print_r($req->input());
    }

}
