<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Checkout;

class CheckoutController extends Controller
{
    public function index()
    {   
        
        $products = Cart::query()->orderBy('name', 'desc')->get();
        $total_price = Cart::query()->sum('price');

    	return view('pages.checkout', compact(['products','total_price']));
    }

    public function store(Request $request) { 

        $this->validate($request, [
     
            'first_name'  => 'required',
            'last_name'   => 'required',
            'email'       => 'required',
            'address'     => 'required',
            'city'        => 'required',
            'country'     => 'required',
            'zip_code'    => 'required',
            'telephone'   => 'required',
            'total_price' => 'required'
        ]);

            $first_name  = $request['first_name'];
            $last_name   = $request['last_name'];
            $email       = $request['email'];
            $address     = $request['address'];
            $city        = $request['city'];
            $country     = $request['country'];
            $zip_code    = $request['zip_code'];
            $telephone   = $request['telephone '];
            $total_price = $request['total_price'];

        $checkout_model = Checkout::create(
           [  'first_name' => $first_name, 'last_name' => $last_name, 
           'email' =>$email,'address' =>$address, 'city' =>$city,
           'country' => $country, 'zip_code' =>$zip_code,'telephone' =>$telephone, 
           'total_price' =>$total_price,]
        );

        return redirect()->back();
    }
}
