<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
//    protected $fillable=['product_name','category_name','brand_name','price','image','product_description','status'];
    protected $guarded=[];

    protected static $product;
    protected static $image;
    protected static $imagename;
    protected static $directory;
    protected static $imageurl;

    public static function SaveData($request){

        self::$image= $request->file('image');
        self::$imagename=time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory='assets/img/product-image/';
        self::$image->move(self::$directory,self::$imagename);
        self::$imageurl=self::$directory.self::$imagename;

       self::$product=new Product();
       self::$product->product_name              =$request->product_name;
       self::$product->category_name             =$request->category_name;
       self::$product->brand_name                =$request->brand_name;
       self::$product->price                     =$request->price;
       self::$product->image                     =self::$imageurl;
       self::$product->product_description       =$request->product_description;
       self::$product->status                    =$request->status;
       self::$product->save();

//       Product::create([
//           'product_name'  =>$request->product_name,
//            'category_name' =>$request->category_name,
//            'brand_name' =>$request->brand_name,
//           'price' =>$request->price,
//        'product_description'=>$request->product_description,
//        'status'=>$request->status,
//       ]);
//       Product::create($request->except('_token'));
    }
}
