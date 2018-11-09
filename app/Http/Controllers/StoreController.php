<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;

class StoreController extends Controller
{
    public function index()
    {   
    	$categories = Category::with('product')->orderBy('name','desc')->get();
    	$brand_categories = Brand::with('product')->orderBy('name', 'desc')->get();
    	$top_selling = Product::where('price','>','500')->take(3)->with('category')->get();
    	$products = Product::with('category')->paginate(9);

    	return view ("pages.store.store", compact(['categories',
    		'brand_categories','top_selling','products']));
    }

   

    public function show(Request $request)
    {    
    	$categories = Category::with('product')->orderBy('name','desc')->get();
        $brand_categories = Brand::with('product')->orderBy('name', 'desc')->get();
        $top_selling = Product::where('price','>','500')->take(3)->with('category')->get();
    	 $query = Product::orderBy('created_at','desc');
    if($request->keyword){
        // This will only execute if you received any keyword
        $query = $query->where('name','like','%'.$keyword.'%');
    }
    if($request->min_price && $request->max_price){
        // This will only execute if you received any price
        // Make you you validated the min and max price properly
        $query = $query->where('price','>=',$request->min_price);
        $query = $query->where('price','<=',$request->max_price);
    }
    $products = $query->paginate(5);
    return view("pages.store.price_filter", compact('categories',
            'brand_categories','top_selling','products'));
    }

}
