<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function userHome()
    {
        return view('home');
    }

    function userAbout()
    {
        return view('about');
    }

    function adminLogin()
    {
        return view('admin.login');
    }

    function userDetails($name)
    {
        return view('profile', ['name' => $name]);
    }

    function adminRegister()
    {
        if (view()->exists('admin.register')) {
            return view('admin.register');
        } else {
            echo "No view found";
        }
    }
}
