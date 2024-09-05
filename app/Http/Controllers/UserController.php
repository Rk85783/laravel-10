<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUser()
    {
        return 'Rohit Kumar';
    }

    public function getUserName($name)
    {
        return 'My Name is ' . $name;
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function userDetails($name)
    {
        return view('user-details', ['name' => $name]);
    }

    public function adminLogin()
    {
        return view('admin.login');
    }
}
