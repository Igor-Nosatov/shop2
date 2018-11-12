<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductReviews;

class ReviewController extends Controller
{
    

    public function store(Request $request) { 

        $this->validate($request, [
     
            'products_id' =>'required',
            'user' => 'required|max:255',
            'email' => 'required|max:255',
            'email' => 'required|max:255',
            'review' => 'required',
            'rating' =>'required|int'
        ]);

        $products_id = $request['products_id'];
        $user = $request['user'];
        $email = $request['email'];
        $review = $request['review'];
        $rating = $request['rating'];

        if($rating > 5) $rating = 5;
        if($rating < 1) $rating = 1;

        $review_model = ProductReviews::create(
           [  'products_id' => $products_id, 'user' => $user, 
           'email' =>$email,'review' =>$review, 'rating' =>$rating ]
        );

        return redirect()->route('product.show', ['product' => $products_id])->with('success-message', 'You have make it');
    }

}
