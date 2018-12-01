<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function store(Request $request){
       $post = $request->all();
        if($post['enroll'] == "enroll")
            echo "correct";
    }
}
