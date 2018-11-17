<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CheckoutController extends Controller
{
    public function index()
    {   
        
        $products = Cart::query()->orderBy('name', 'desc')->get();
        $total_price = Cart::query()->sum('price');

    	return view('pages.checkout', compact(['products','total_price']));
    }
}
