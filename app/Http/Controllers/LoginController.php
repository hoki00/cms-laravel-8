<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('/login');
    }
    
    public function loginprocess(Request $request)
    {
        if(Auth::attempt($request->only('name','password'))){
            return redirect('/pengguna');
        }
        return redirect('/login');
    }

    public function register()
    {
        return view('/register');
    }

    public function adminregister(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return view('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
