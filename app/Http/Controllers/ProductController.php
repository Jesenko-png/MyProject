<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('addProduct');
    }
    public function addProduct(Request $request){
        $request->validate([
            "name"=>"required|string|min:3|max:50",
            "description"=>"required|string|min:3|max:50",
            "price"=>"required|numeric",
            "amount"=>"required|numeric",
            "image"=>"required|string"
        ]);
            Product::create([
                "name" => $request->name,
                "description" => $request->description,
                "amount" => $request->amount,
                "price" => $request->price,
                "image" => $request->image
            ]);

            redirect("/admin/products");
    }
}
