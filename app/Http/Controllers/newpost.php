<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\postinsert;
use Session;


class newpost extends Controller
{
    //
    function save(Request $req)
    {
        $this->validate($req, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $postdata= new postinsert;
        if ($req->hasFile('file')) {
            $postdata = $req->file('file');
            $name = time().'.'.$postdata->getClientOriginalExtension();
            $destinationPath = public_path('/imagesnew');
            $postdata->move($destinationPath, $name);
         }
        {
            //print_r($req->input());
           
            $postdata->post_text= $req->description;
            $postdata->textbackground_status= '0';
            echo Session::get('key');
             echo $postdata->save();
        }

    }

}
?>
