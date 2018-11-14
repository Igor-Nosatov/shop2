<?php

namespace App;

use App\Product;
use App\Color;
use App\Size;




class Cart
{
    public $id;
    public $brand_id;
    public $category_id;
    public $color;
    public $size;
    public $name;
    public $price;
    public $image;
    public $quantity;
    public $description;
    public $updated_at;
    public $created_at;
    public $quantityCart = 0;

    public static function fromProduct(Product $product,Color $color, Size $size){
        $cartProduct = new Cart;

        $cartProduct->id = $product->id;
        $cartProduct->brands_id = $product->brands_id;
        $cartProduct->category_id = $product->category_id;
        $cartProduct->color_id = $product->color_id;
        $cartProduct->size_id = $product->size_id;
        $cartProduct->name = $product->name;
        $cartProduct->price = $product->price;
        $cartProduct->image = $product->image;
        $cartProduct->size = $size->name;
        $cartProduct->color = $color->name;
        $cartProduct->quantity = $product->quantity;
        $cartProduct->description = $product->description;
        $cartProduct->updated_at = $product->updated_at;
        $cartProduct->created_at = $product->created_at;

        return $cartProduct;
    }
}