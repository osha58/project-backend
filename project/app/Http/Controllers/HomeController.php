<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\Category;
use DB;
class HomeController extends Controller
{
    //
    function get_home_page(){
        $LatestProducts =Product::orderBy('id')->take(3)->get();
        $Products = Product::orderBy('desc')->take(16)->get();
        return view('users.home')->with([
            'LatestProducts'=>  $LatestProducts ,
            'Products'=>  $Products ,
        ]);


    }


    function index(){

        // $LatestProducts =Product::orderBy('id' , 'desc')->take(9)->get();

        $LatestProducts =Product::orderBy('id' , 'desc')->take(3)->get();
        // $Products = Product::orderBy('id')->paginate(8);
        $Products = Product::where('category_id', '17')->paginate(8);
        // $Products =  $LatestProducts->paginate(3);

        // return view('users.men')->with([
        //     'Products'=> $Products
        // ]);
        // return view('users.men', compact('Products'));
        return view('users.men')->with([
            'Products'=> $Products ,
            'LatestProducts'=>$LatestProducts,
        ]);




    }


    function show(){
        //    $LatestProducts =Product::orderBy('id' , 'desc')->take(3)->get();
        $Products = Product::where('category_id', '18')->paginate(8);

        $LatestProducts =Product::orderBy('id' , 'desc')->take(9)->get();
        return view('users.women')->with([
            'Products'=> $Products,
            'LatestProducts'=>$LatestProducts,
        ]);


    }

    function index2(){
        $Products = Product::where('category_id', '19')->paginate(8);
        return view('users.kids')->with([
            'Products'=> $Products
        ]);

    }





    function index6(){
        $Products = Product::orderBy('id')->paginate(8);
        return view('users.index6')->with([
            'Products'=> $Products
        ]);

    }






    function index3(){
        return view('users.profile');
    }
    function index4(){
        return view('users.orders');
    }





    // function men2(){
    //     $Products = Product::where('category_id', '17')->paginate(8);
    //     $LatestProducts =Product::where('category_id', '17')->take(7)->get();
    //     return view('users.men2')->with([
    //         'Products'=> $Products ,
    //         'LatestProducts'=>$LatestProducts,
    //     ]);
    // }


    // function women2(){
    //     $Products = Product::where('category_id', '17')->paginate(8);
    //     $LatestProducts =Product::where('category_id', '18')->take(7)->get();
    //     return view('users.women2')->with([
    //         'Products'=> $Products ,
    //         'LatestProducts'=>$LatestProducts,
    //     ]);
    // }


    // function kids2(){
    //     $Products = Product::where('category_id', '17')->paginate(8);
    //     $LatestProducts =Product::where('category_id', '19')->take(7)->get();
    //     return view('users.kids')->with([
    //         'Products'=> $Products ,
    //         'LatestProducts'=>$LatestProducts,
    //     ]);
    // }
    // function all2(){
    //     $Products = Product::where('category_id', '17')->paginate(8);
    //     $LatestProducts =Product::orderBy('id' , 'desc')->take(7)->get();
    //     return view('users.all2')->with([
    //         'Products'=> $Products ,
    //         'LatestProducts'=>$LatestProducts,
    //     ]);
    // }


}
