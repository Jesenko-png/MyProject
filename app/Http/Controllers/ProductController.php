<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

    class ProductController extends Controller
{
        public function index(){
            return view('admin/addProduct');
}
        public function addProduct(Request $request){
                    $request->validate([
                        "name"=>"required|string|min:3|max:50",
                        "description"=>"required|string|min:3|max:50",
                        "price"=>"required|numeric|min:0",
                        "amount"=>"required|numeric|min:0",
                        "image"=>"required|string"
                    ]);
            Product::create([
                        "name" => $request->name,
                        "description" => $request->description,
                        "amount" => $request->amount,
                        "price" => $request->price,
                        "image" => $request->image
                    ]);

return redirect("/admin/products");
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

}
