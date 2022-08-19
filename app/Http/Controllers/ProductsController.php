<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    //Fetch Product From Database
    public function index(){
        $products = Product::orderBy('created_at','desc')->paginate(3);
        return view('products.products')->with('products',$products);
    }
    //Show Details Of single Product
    public function show($id){
        $product = Product::find($id);
        //dd($product);
        return view('products.product')->with('product', $product);
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
        return redirect('/product/'.$product->id);
        //Show sellers own Product
    }
    public function ShowOwnProduct()
    {
        # code...
        $product = Product::where('user_id',Auth::id())->orderBy('created_at','desc')->paginate();
        return view('dashboard')->with('product',$product);
    }

    public function Edit($id)
    {
        $product = Product::find($id);
        return view('products.edit-product')->with('product',$product);
    }
    public function update(Request $request, $id){
        $request->validate([
            'price'=>'numeric',
        ]);
        $product=Product::find($id);
        if ($request->hasFile('product-img')) {
            $path=$request->file('product-img')->store('image_url');
        }
        if (!empty($request->input('title'))) {
            $product->title=$request->input('title');
        }
        if (!empty($request->input('desc-sm'))) {
            $product->short_desc=$request->input('desc-sm');
        }
        if (!empty($request->input('full_desc'))) {
            $product->full_desc=$request->input('desc-full');
        }
        $product->save();
        return redirect('/product/'.$product->id);
    }
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->action([ProductsController::class,'ShowOwnProduct']);
    }
}
