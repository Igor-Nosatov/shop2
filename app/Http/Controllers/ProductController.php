<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Size;
use App\Color;
use App\ProductReviews;

use Session;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = Product::query()->findOrFail($id);
        $reviews = ProductReviews::query()->latest()->with('product')->paginate(3);

        $count_star = ProductReviews::query()->sum('rating');
        $avg_stars = ProductReviews::query()->avg('rating');
        $star5= ProductReviews::query()->where('rating','=','5');
        $star4= ProductReviews::query()->where('rating','=','4');
        $star3= ProductReviews::query()->where('rating','=','3');
        $star2= ProductReviews::query()->where('rating','=','2');
        $star1= ProductReviews::query()->where('rating','=','1');


        return view('pages.product',compact
        	(['products','reviews','avg_stars',
        		'star5','star4','star3',
        		'star2','star1','count_star']));
    }

}
