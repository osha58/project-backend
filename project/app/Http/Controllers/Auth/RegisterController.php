<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    //
    public function register(){
        return view("Auth.register");
    }
    public function handleRegister(Request $request){
          $data = $request->all();
          $data["password"]=Hash::make($data['password']);
        //   $data["confirm password"]=Hash::make($data['confirm_password']);
          $user= User::create($data);
          return $user ? redirect("login") : redirect("register");

    }
}
