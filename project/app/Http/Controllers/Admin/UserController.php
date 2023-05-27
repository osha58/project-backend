<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
class UserController extends Controller
{
    //
    function create(){
        return view("users.addUser");
    }


    function store(Request $request){

           $data = $request->all();
           $data['password'] = \Hash::make($request->password);
           if($request->hasFile("image"))
           {
            $image = $request->file("image");
            $imageName = time() . "_" . uniqid() . "_user." .$image->getClientOriginalExtension();
            $destination = public_path("assets/images/");
            $image->move($destination , $imageName);
            $data['image'] = "assets/images/".$imageName;
           }else{
            $data['image'] = "assets/default/product.jpeg";

           }
           $user = User::create($data);
           return $user?  redirect("/") : redirect()->back();
        }

}
