<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartItem;
class ProductController extends Controller
{
    //function
    function index(){
        $products = Product::all();
        return view("Products.index" ,["products" => $products]);
    }

    function create(){
       $categories= Category::get();
        return view("Products.create" ,["categories" =>$categories] );
    }

    function store(Request $req){

        $data = $req->all();

        if($req->hasFile("image"))
        {

         $image = $req->file("image");

         $imageName = time() . "_" . uniqid() . "_product." .$image->getClientOriginalExtension();
         $destination = public_path("assets/images/");
         $image->move($destination , $imageName);

         $data['image'] = "assets/images/".$imageName;

        }else{
         $data['image'] = "assets/default/product.jpeg";

        }
        $product =  Product::create($data);
        return $product ? redirect("products") : redirect()->back();
     }




     function show2(Product $product){

    return view('Products.show2', ['product'=> $product]);

    }

    function show3(Product $product){

        return view('Products.show3', ['product'=> $product]);

        }

        function show4(Product $product){

            return view('Products.show4', ['product'=> $product]);

            }


            function show5(Product $product){

                return view('Products.show5', ['product'=> $product]);

                }

                function show6(){

                    return view('Products.show6');

                    }


                    // function show7(Request $request){

                    //     $product = Product::findOrFail($request->input('product_id'));
                    //     // $cartItem = new CartItem([
                    //     //     'product_id' => $product->id,
                    //     //     'quantity' => $request->input('quantity'),
                    //     //     'price' => $product->price,
                    //     // ]);
                    //     $cartItem = CartItem::getItems(); // Replace with your own cart items retrieval code
                    //       return view('MyCart', ['cartItem'=>  $cartItem]);
                    //     }



function destroy(Product $product){
    $product->delete();
    return redirect("MyCart");
}



}
