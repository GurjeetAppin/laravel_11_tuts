<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Blade;
class DeviceController extends Controller
{
    //
    function index(Device $key){ // Add the model name like Device model and get the data from database.
        //return $key;
        return $key->all();
    }

    function inlineBldTmplte(){
        $totalProduct = 20;
        return Blade::render('{{ $total }} Total Product list',['total' => $totalProduct]);
    }
}
