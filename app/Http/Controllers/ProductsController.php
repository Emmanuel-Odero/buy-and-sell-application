<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    //Fetch Data From Database
    public function index(){
        $products = Product::all();
        return view('products.products')->with('products',$products);
    }
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
        $path=$request->file('product-img')->store('UserProductsImages');
        //dd($path);
        //Insert data into the products table
        $product = new Product();
        $product->title=$request->input('title');
        $product->short_desc=$request->input('desc-sm');
        $product->full_desc=$request->input('desc-full');
        $product->price=$request->input('price');
        $product->image_url=$path;
        $product->user_id=Auth::id();
        // dd($product);
        $product->save();
        return redirect('/product'.$product->id);
    }
}
