<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index($id){
       // return "1001 users";
      // return $id;
      return view('mobile',['name'=>'Fawad Hassan']);
    }
}
