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
            'desc_sm'=>'required',
            'desc_full'=>'required',
            'price'=>'required|numeric',
            'product_img'=>'required'
        ],[],[
            'title'=>'Product Title',
            'desc_sm'=>'Product Short Description',
            'desc_full'=>'Product Full Description',
            'price'=>'Product Price',
            'product_img'=>'Product Image'            
        ]);
        //upload the image
        $path=$request->file('product_img')->store('UserProductsImages');
        dd($path);
        //Insert data into the products table
    }
}
