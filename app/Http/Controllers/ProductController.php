<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Size;
use App\Color;
use App\Category;
use App\ProductReviews;
use App\Cart;

class ProductController extends Controller {
    
    public function show($id) 
    {
        $products = Product::with(['color', 'size'])->findOrFail($id);
        $productsId = Product::with('category')->findOrFail($id);
        $categoryIds = $productsId->category->pluck('id')->toArray();
        $reviews = ProductReviews::query()->latest()->with('product')->paginate(3);
        $count_star = ProductReviews::query()->count();
        $avg_stars = ProductReviews::query()->avg('rating');
        $star5 = ProductReviews::query()->where('rating', '=', '5')->count();
        $star4 = ProductReviews::query()->where('rating', '=', '4')->count();
        $star3 = ProductReviews::query()->where('rating', '=', '3')->count();
        $star2 = ProductReviews::query()->where('rating', '=', '2')->count();
        $star1 = ProductReviews::query()->where('rating', '=', '1')->count();
        $cart_product = Cart::get();
        $similarProduct = Product::whereHas('category', function ($query) use ($categoryIds) {
            return $query->whereIn('id', $categoryIds);
        })->where('id', $productsId->id)->limit(10)->get();
        $total_price = Cart::query()->sum('price');
        $total_item = Cart::query()->sum('number');
        $cart_item = Cart::query()->get();
        return view('pages.product', compact(['products', 'productsId', 'reviews', 'avg_stars', 'star5', 'star4', 'star3', 'star2', 'star1', 'count_star', 'similarProduct', 'cart_product', 'total_price', 'total_item', 'cart_item']));
    }
}
