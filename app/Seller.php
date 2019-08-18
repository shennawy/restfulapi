<?php

namespace App;
//Seller extends User, shouldn't have its own table in DB
use App\Product;
//Not using Model anymore, below line not needed
//use Illuminate\Database\Eloquent\Model;

class Seller extends User
{
    //Seller has many products
    public function products()
    {
        return $this->hasMany(Product::class);    
    }
}
