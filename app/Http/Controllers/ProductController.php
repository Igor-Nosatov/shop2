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
        return view('pages.product',compact(['products','reviews']));
    }

}
