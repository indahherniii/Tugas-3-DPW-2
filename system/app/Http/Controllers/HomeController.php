<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showbase(){
        return view('section.base');
    }

    function showdashboard(){
        return view('dashboard');
    }
    
    function showcategories(){
        return view('categories');
    }

    function showhomeproduct(){
        return view('product');
    }

    function showuser(){
        return view('user');
    }

    function showprofile(){
        return view('profile');
    }


}