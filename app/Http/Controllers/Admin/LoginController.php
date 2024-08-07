<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login() {
        return view('admin.login');
    }


    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (\Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.stories');
        }

        return redirect()->back();
    }

    public function logout()
    {
        \Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
