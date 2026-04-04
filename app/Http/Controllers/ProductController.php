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
    public function edit($product){
            $singleProduct=Product::find($product);

            return view('admin.editProduct' , compact('singleProduct'));
    }
        public function update(Request $request, $product)
        {
            $request->validate([
                "name" => [
                    "required",
                    "string",
                    "min:3",
                    "max:50",
                    Rule::unique('products')->ignore($product)
                ],
                "description" => "required|string|min:3|max:50",
                "price" => "required|numeric|min:0",
                "amount" => "required|numeric|min:0",
                "image" => "required|string"
            ]);

            $updateProduct = Product::findOrFail($product);

            $updateProduct->name = $request->name;
            $updateProduct->description = $request->description;
            $updateProduct->price = $request->price;
            $updateProduct->amount = $request->amount;
            $updateProduct->image = $request->image;

            $updateProduct->save();

            return redirect()->route("sviProizvodi");
        }

}
