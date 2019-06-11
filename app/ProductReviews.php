<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ProductReviews extends Model {
    
    protected $table = 'product_reviews';
    protected $fillable = ['products_id', 'user', 'email', 'review', 'rating'];
    
    public function product() 
    {
        return $this->belongsTo('App\Product');
    }
}

