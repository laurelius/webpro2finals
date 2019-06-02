<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Fate/Grand Order";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function updates(){
        $title = "Updates";
        return view('pages.updates')->with('title', $title);
    }

    public function signup(){
        $title = "Sign Up";
        return view('pages.signup')->with('title', $title);
    }

    public function login(){
        $title = "Log In";
        return view('pages.login')->with('title', $title);
    }

    public function about(){
        $title = "About the game";
        return view('pages.about')->with('title', $title);
    }

    public function editprofile(){
        $title = "Edit Profile";
        return view('pages.editprofile')->with('title', $title);
    }

    public function forgotpassword(){
        $title = "Forgot Password?";
        return view('pages.forgotpassword')->with('title', $title);
    }

    public function guides(){
        $title = "Guides";
        return view('pages.guides')->with('title', $title);
    }
}
