<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        return view('user.index');
    }
    public function properties()
    {
        return view('user.properties');
    }
    public function services()
    {
        return view ('user.services');
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }
    }