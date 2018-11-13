<?php

namespace App;

use App\Product;
use App;

class Cart extends Model
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $category;
    public $brand;
    public $color;
    public $size;
    

    public $quantityCart = 0;

    public static function cart_product(Product $product)
    {
       $cartProduct = new CartProduct;
       
       $cartProduct->id = $product->id;
       $cartProduct->name = $product->name;
       $cartProduct->price = $product->price;
       $cartProduct->image =  $product->image;
       $cartProduct->category = $product->category->name;
       $cartProduct->brand = $product->brand->name;
       $cartProduct->color = $product->color->name;
       $cartProduct->size = $product->size->name;
       
        return $cartProduct;
    }
}
