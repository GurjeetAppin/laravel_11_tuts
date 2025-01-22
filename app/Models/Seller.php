<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    function productData(){
        return $this->hasOne('App\Models\Product');

        // If the column name is not same in product table then we add the column name inside the relation table
        //return $this->hasOne('App\Models\Product','column_name');
        return $this->hasOne('App\Models\Product','owner_id');
    }

    function productManyData(){
        return $this->hasMany('App\Models\Product');
    }
}
