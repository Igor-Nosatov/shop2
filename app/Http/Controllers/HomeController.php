<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class HomeController extends Controller
{
     public function index()
     {  
     $nav = Category::query()->orderBy('name', 'desc')->get();

     $categories = Category::get()->take(3);

    $products = Product::query()->get();
         
    $product_category1 = Product::with('category')->get()->where('category_id','=','1');
    $product_category2 = Product::with('category')->get()->where('category_id','=','2');
    $product_category3 = Product::with('category')->get()->where('category_id','=','3');

    $fp_c1 = Product::with('category')->get()->where('category_id','=','1')->take(3);
    $fp_c2 = Product::with('category')->get()->where('category_id','=','2')->take(3);
    $fp_c3 = Product::with('category')->get()->where('category_id','=','3')->take(3);

     	return view("pages.home.home", compact([
            'categories','products','nav',
            'product_category1','product_category2','product_category3'
            ,'fp_c1','fp_c2','fp_c3']));
     }

}
