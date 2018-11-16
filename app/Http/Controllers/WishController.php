<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use App\Wishlist;
use Session;

class WishController extends Controller
{
    public function index(){
        return view('wishlist', [ 'categories' => Category::get(), 'products' => wishes() ]);
    }
    public function destroy(Request $request) {
        $wish = Wishlist::where('products_id', $id);
        $wish->delete();
        return back()->with('success-message', 'delete product');
    }
    public function store(Request $request) {
        $products_id = $request['products_id'];
        Wishlist::create(
            [ 'products_id' => $products_id ]);
        return back()->with('success-message', 'add product');
    }
}
