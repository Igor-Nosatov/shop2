<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Color;
use App\Size;

class StoreController extends Controller
{

public function index()
    {   
    	$categories = Category::with('product')->orderBy('name','desc')->get();
    	$brand_categories = Brand::with('product')->orderBy('name', 'desc')->get();
    	$top_selling = Product::where('price','>','500')->take(3)->with('category')->get();
    	$products = Product::with(['color', 'size','category'])->paginate(9);

    	return view ("pages.store.store", compact(['categories',
    		'brand_categories','top_selling','products']));
    }

   

  public function show(Request $request)
   {    
      $categories = Category::with('product')->orderBy('name','desc')->get();
      $brand_categories = Brand::with('product')->orderBy('name', 'desc')->get();
      $top_selling = Product::where('price','>','500')->take(3)->with('category')->get();

    	   $query = Product::orderBy('created_at','desc');

           if($request->min_price && $request->max_price)
           { 
             $query = $query->where('price','>=',$request->min_price);
             $query = $query->where('price','<=',$request->max_price);
           }
            $products = $query->paginate(6);
   
      return view("pages.store.store", compact(['categories',
              'brand_categories','top_selling','products']));
    }

   public function update(Request $request)
    {
       $categories = Category::with('product')->orderBy('name','desc')->get();
       $brand_categories = Brand::with('product')->orderBy('name', 'desc')->get();
       $top_selling = Product::where('price', '>','500')->take(3)->with('category')->get();

           if($request->has('search')){
           $products = Product::search($request->input('search'))->get();
           }

       return view("pages.store.search", compact(['categories',
              'brand_categories','top_selling','products']));
    }

    public function category($id)
    {
       $categories = Category::with('product')->orderBy('name','desc')->get();
       $brand_categories = Brand::with('product')->orderBy('name', 'desc')->get();
       $top_selling = Product::where('price', '>','500')->take(3)->with('category')->get();

       $products = Product::query()->where('category_id', $id)->paginate(6);

       return view("pages.store.store", compact(['categories',
              'brand_categories','top_selling','products']));
    }

    public function brand($id)
    {
       $categories = Category::with('product')->orderBy('name','desc')->get();
       $brand_categories = Brand::with('product')->orderBy('name', 'desc')->get();
       $top_selling = Product::where('price', '>','500')->take(3)->with('category')->get();

       $products = Product::query()->where('brand_id', $id)->paginate(6);

       return view("pages.store.store", compact(['categories',
              'brand_categories','top_selling','products']));
    }


    
}
