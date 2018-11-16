<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CartController extends Controller
{   
    public function index()
    { 
      $cart_product = Cart::get();
      return view('pages.cart',compact('cart_product'));
    }
     
    public function store(Request $request) { 

        $this->validate($request, [
     
            'products_id' =>'required',
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'size' => 'required',
            'color' => 'required',
            'number' => 'required'
            
        ]);

        $products_id = $request['products_id'];
        $name = $request['name'];
        $image = $request['image'];
        $price = $request['price'];
        $size = $request['size'];
        $color = $request['color'];
        $number = $request['number'];

        $cart_model = Cart::create(
           [  'products_id' => $products_id, 
           'name' => $name,'image' => $image,
           'price' => $price, 'size' =>$size,
           'color' =>$color, 'number' =>$number]
        );

        return redirect()->route('product.show', ['product' => $products_id])->with('success-message', 'You have make it');
    }
}
