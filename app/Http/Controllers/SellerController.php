<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
Use App\Models\Product;

class SellerController extends Controller
{
    function sellerlist(){
        //return Seller::all();
        return Seller::find(1)->productData;
    }

    function manyRelList(){
        return Seller::find(1)->productManyData;
    }

    function manyToOneRelList(){
        //return Product::all();
        $data = Product::with('seller')->get();
        return $data;
    }
}
