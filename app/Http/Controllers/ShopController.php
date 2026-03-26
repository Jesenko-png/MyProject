<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function index(){

        $allProducts = Product::all();


        return view ("shop" , compact("allProducts"));
    }
}
