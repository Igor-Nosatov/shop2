<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 
use App\Product;
use App\Cart;
use Session;



class CartController extends Controller
{
     public function index(){
        $products = session()->get('pages.cart');

        $total = 0;
        $counter = 0;

        
        
        if($products != null){
            foreach ($products as $product)
                $counter += $product->quantityCart;
            $total += CartController::totalCost($products);
        }
        
        if($counter >= 10)
            $total = $total * 0.9;

        return view('pages.cart', compact(['products','total']));
    }


     public function stored(Request $request) {

        $id = $request['product_id'];
        
        if($request->session()->has('pages.cart')){
            foreach($request->session()->get('pages.cart') as $product) {
                if($id == $product->id) {
                    $request['type'] = 'plus';
                    return $this->editProduct($request,  $product->id);
                }
            }
        }

        $cartProduct = CartProduct::fromProduct(Product::get()->where('id', $id)->first());
        
        $cartProduct->quantityCart++;
        
        $request->session()->push('pages', $cartDarkBeer);

        return redirect('/'.App::getLocale().'/cart');
    }
}
