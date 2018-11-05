<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table  = 'products';

  protected $fillable = ['name', 'description', 'price', 'image', 'category_id', 'brand_id'];

   public function category()
  {
    return $this->belongTo('App\Category');
  }

   public function brand()
   {
     return $this->belongTo('App\Brand');
   }

   public function colors()
   {
     return $this->belongsToMany('App\Color');
   }

   public function sizes()
   {
     return $this->belongsToMany('App\Size');
   }

   public function product_reviews()
   {
     return $this->hasMany('App\ProductReviews')
   }
}
