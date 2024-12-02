<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserControler extends Controller
{
    //
    function home($name){
        return view('home',['name'=>$name]);
    }

    function aboutUser(){
        return "residence in lahore";
    }

    function getUserName($name){
        return "This is " . $name;
    }
    
}
