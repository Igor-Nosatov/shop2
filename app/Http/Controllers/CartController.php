<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Color;
use App\Size;
use App\Cart;
use Auth;
use Session;

class CartController extends Controller {

    public function __construct() {}

    public function index(){
        $products = session()->get('cart.products');
        return view('pages.cart', [ 'categories' => Category::get(), 'products' => $products, 'totalCost' => $products!=null?CartController::total_cost($products):0 ]);
    }

    public function store(Request $request) {

        $products_id = $request['products_id'];
         $products_id = $request['size'];
          $products_id = $request['color'];
           $products_id = $request['qty'];
        
        if($request->session()->has('cart.products')){
            foreach($request->session()->get('cart.products') as $product) {
                if($products_id == $product->id) {
                    $request['type'] = 'plus';
                    return $this->edit($request, $product->id);
                }
            }
        }

        $product = Product::get()->where('id', '=', $products_id)->first();    
        $cartProduct = Cart::fromProduct($product);
        
        $cartProduct->quantityCart++;
        
        $request->session()->push('cart.products', $cartProduct);

        return redirect()->route('cart.index');
    }

    public function destroy(Request $request, $id) {

        $products = array();
        
        foreach($request->session()->pull('cart.products', []) as $product) {
            if($id != $product->id) {
                $products []= $product;
            }
        }

        session()->put('cart.products', $products);

        return redirect()->route('cart.index');
    }

    public function edit(Request $request, $id) {

        $products = array();
        $rType = $request['type'];
        $productUpdate = null;
        
        
        foreach($request->session()->get('cart.products') as $product) {
            if($id != $product->id) 
                $products []= $product;

            if($id == $product->id) {
                $productUpdate = clone $product;
                $productUpdate->quantityCart = $rType=='plus'?$productUpdate->quantityCart+=1:$productUpdate->quantityCart-=1;
                
                if($productUpdate->quantityCart < 1)
                    return $this->destroy($request, $productUpdate->id);
                if($productUpdate->quantityCart >= $productUpdate->quantity + 1)
                    return redirect()->route('cart.index')->with('danger-message', "Единиц данного товара в наличии - $productUpdate->quantity." );
                    
                $products []= $productUpdate;
            }
        }
        

        session()->pull('cart.products');
        session()->put('cart.products', $products);
    

        return redirect()->route('cart.index');
    }

    public static function total_cost($products){
        $sum = 0; 

        foreach ($products as $product)
            $sum += $product->price * $product->quantityCart;
        
        return $sum; 
    }
}