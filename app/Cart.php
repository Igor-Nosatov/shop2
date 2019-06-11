<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model 
{
    protected $table = "cart";
    protected $fillable = ['products_id', 'name', 'image', 'price', 'size', 'color', 'number'];
    
    public function product() 
    {
        return $this->belongsToMany('App\Product');
    }
}



