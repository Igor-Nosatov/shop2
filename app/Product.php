<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{ 
  use Searchable;

  protected $table = 'products';

  protected $fillable = ['name','description', 'image', 'price'];

  public function category() 
  {
    return $this->belongsTo('App\Category', 'category_id');
  }
  public function brand() 
  {
    return $this->belongsTo('App\Brand', 'brand_id');
  }
  public function review() 
  {
    return $this->hasMany('App\ProductReviews', 'review_id');
  }

  public function color()
  {
    return $this->belongsToMany('App\Color');
  }

  public function size()
  {
    return $this->belongsToMany('App\Size');
  }
    
}
