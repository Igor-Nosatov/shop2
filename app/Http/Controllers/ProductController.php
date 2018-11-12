<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductReview;
use App\Category;
use App\Brand;

use Session;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = Product::query()->findOrFail($id);
        return view('pages.product',compact(['products']));
    }

}
