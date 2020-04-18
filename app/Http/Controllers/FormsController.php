<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function submit(Request $request){

        $request->validate([
            "user" => "required",
            "password" => "min:4 | max:6",
            "phone" => "min:9"
        ]);
        //print_r($request->input());
        $request->session()->flash('data','Data Submit Successfully');
        return redirect('/');
    }
}
