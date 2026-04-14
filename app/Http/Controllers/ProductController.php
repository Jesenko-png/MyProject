<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

    class ProductController extends Controller
{
        public function index(){
            return view('admin/addProduct');
}
        public function addProduct(Request $request){
                    $request->validate([
                        "name"=>"required|string|min:3|max:50|unique:products",
                        "description"=>"required|string|min:3|max:50",
                        "price"=>"required|numeric|min:0",
                        "amount"=>"required|numeric|min:0",
                        "image"=>"required|string"
                    ]);
            Product::create([
                        "name" => $request->get("name"),
                        "description" => $request->get("description"),
                        "amount" => $request->get("amount"),
                        "price" => $request->get("price"),
                        "image" => $request->get("image")
                    ]);

return redirect()->route("sviProizvodi");
}
        public function products()
    {
            $products = Product::all();
                return view('admin.products' , compact('products'));
    }
    public function delete($product){
            $singleProduct=Product::where(["id"=>$product])->first();

            if($singleProduct===null){
                die("Ovaj proizvod ne postoji");
            }
            $singleProduct->delete();

            return redirect()->back()   ;
    }
    public function edit(Request $request , Product $product){


            return view('admin.editProduct' , compact('product'));
    }
        public function update(Request $request, Product $product)
        {
            $request->validate([
                "name" => [
                    "required",
                    "string",
                    "min:3",
                    "max:50",
                    Rule::unique('products')->ignore($product->id)
                ],
                "description" => "required|string|min:3|max:50",
                "price" => "required|numeric|min:0",
                "amount" => "required|numeric|min:0",
                "image" => "required|string"
            ]);



            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->amount = $request->amount;
            $product->image = $request->image;

            $product->save();

            return redirect()->route("sviProizvodi");
        }

}
