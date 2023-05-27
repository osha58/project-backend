<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    function login(){
        return view("Auth.login");
    }

    function handleLogin(Request $request){
     $cred = Auth::attempt(['email'=> $request->email , 'password'=>$request->password]);
     if($cred){
               return redirect("/");
     }else{
               return redirect()->back();
     }
    }


    function logout(){
        Auth::logout();
        return redirect("/");
    }

}

