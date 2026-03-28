<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $sat = date("H");
        $products = Product::latest()->take(6)->get();

        $trenutnoVrijeme = date("h:i:s");
        return view('welcome', compact('sat', 'trenutnoVrijeme' , "products"));
    }

}
