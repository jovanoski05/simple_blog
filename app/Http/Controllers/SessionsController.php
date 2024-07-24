<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    protected function authRedirect($view)
    {
        if (Auth::check())
        {
            return redirect("/");
        }

        return view($view);
    }

    public function register()
    {
        return $this->authRedirect('sessions.register');
    }

    public function login()
    {
        return $this->authRedirect("sessions.login");
    }

    public function store()
    {

    }

    public function destroy()
    {

    }
}
