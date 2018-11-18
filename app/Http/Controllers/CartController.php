<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;

class CartController extends Controller
{   

    public function index()
    { 
      $cart_product = Cart::get();
       $total_price = Cart::query()->sum('price');
          $total_item = Cart::query()->sum('number');
          $cart_item = Cart::query()->get();
      return view('pages.cart',compact('cart_product','total_price','total_item','cart_item'));
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

        return redirect()->back();
    }
    
       public function add($id)
    { 
        $cart_product = Cart::find($id);
        $cart_product->increment('number', 1);
        $cart_product->save();
        return redirect()->back();
    }
       public function minus($id)
     {
        $cart_product = DB::table('cart')->whereId($id)->update(['number' => DB::raw('GREATEST(number - 1, 0)')]);
        return redirect()->back();
     }
    
        public function destroy( $id)
    {
        $cart_product = Cart::find($id);
        $cart_product->delete();
        return redirect()->back();
    }
    
}
