<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index()
    {
        if (! Auth::check())
        {
            return view("home.index");
        }

        return view("home.index-auth");
    }
}
