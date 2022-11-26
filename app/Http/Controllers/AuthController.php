<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPost(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        return redirect()->route('admin.login')->withErrors('Email or Password is wrong!');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
