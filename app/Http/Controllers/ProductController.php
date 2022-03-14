<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('product.add');
    }

    public function js(){
        return view('js.js');
    }

    public function newProduct(Request $request){
//        return $request->all();


        Product::SaveData($request);
        return redirect()->back()->with('message','Product created successfully');

    }
    public function manageProduct(){

//        Product::all()
        return view('product.manage',[
            'products'=>Product::all(),
        ]);
    }

    public function deleteProduct($id){
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('message','product delete successfullu');
    }
}
