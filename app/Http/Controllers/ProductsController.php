<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //store products
    public function store(Request $request){
        //validate the inputs
        $request->validate([
            'title'=>'required',
            'desc-sm'=>'required',
            'desc-full'=>'required',
            'price'=>'required|numeric',
            'product-img'=>'required'
        ],[],[
            'title'=>'Product Title',
            'desc-sm'=>'Product Short Description',
            'desc-full'=>'Product Full Description',
            'price'=>'Product Price',
            'product-img'=>'Product Image'            
        ]);
        //upload the image
        $path=$request->file('product_img')->store('UserProductsImages');
        dd($path);
        //Insert data into the products table
    }
}
