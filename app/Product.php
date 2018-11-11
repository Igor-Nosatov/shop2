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
 

 //public function toSearchableArray()
//        $genres = array_map(function($item) {
 //           return trim($item);
//       }, explode(',', $this->category->genres));
//
   //     return array_merge( $this->toArray(), ['category' => $this->category->name, 'photo' => $this->category->photo, 'genres' => $genres]);
   // }


}
