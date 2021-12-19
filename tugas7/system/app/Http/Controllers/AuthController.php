<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('client.login');
    }

    function LoginProcess (){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin/dashboard')->with('success','berhasil login');
        }else{
            return back()->with('danger','login anda gagal');
        }
    }

    function Logout (){
        Auth::logout();
        return redirect('login');
    }
}
