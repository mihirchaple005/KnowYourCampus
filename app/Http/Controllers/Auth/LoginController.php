<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended('/gallery');
    }
}

?>