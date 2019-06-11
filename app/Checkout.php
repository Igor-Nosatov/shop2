<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model 
{
    protected $table = 'checkout';
    protected $fillable = ['first_name', 'last_name', 'email', 'adress', 'city', 'country', 'zip_code', 'telephone'];
}
