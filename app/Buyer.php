<?php

namespace App;

use App\Transaction;
//Not using Model anymore, below line not needed
//use Illuminate\Database\Eloquent\Model;

class Buyer extends User
{
    //
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
