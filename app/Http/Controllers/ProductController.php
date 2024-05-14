<?php

namespace App\Http\Controllers;
use App\Models\Product; 
use App\Models\User; 

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $users = User::all();
        return view('index')->with('products', $products)->with('users', $users);
    }

    public function productDetails($id){
        $product = Product::find($id);
        $products = Product::orderBy('price', 'desc')->take(5)->get();

        return view('productDetails')->with('product', $product)->with('products', $products);
    }

    public function addProduct(){
        return view('addProduct');
    }

    public function addProductPost(Request $request){
        $validateData = $request->validate([
            'name' => 'required|unique:products,name',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
        ]);

        $name = $request->input('name');
        $price = $request->input('price');
        $qty = $request->input('qty');

        Product::create([
            'name'=> $name,
            'price'=> $price,
            'qty'=> $qty
        ]);
        return view('addProduct');
    }

    public function editProduct($id){
        $product = Product::find($id);

        return view('editProduct')->with('product', $product);
    }

    public function editProductPost(Request $request, $id) {
        $product = Product::find($id);
        $products = Product::orderBy('price', 'desc')->take(5)->get();
    
        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found');
        }
    
        $product->name = $request->input('name');
        $product->qty = $request->input('qty');
        $product->price = $request->input('price');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $product->image = $filename;
        }
    
        try {
            $product->save();
            return view('productDetails')->with('product', $product)->with('products', $products);        
        } catch (Exception $e) {
            return view('productDetails')->with('product', $product)->with('products', $products);        
        }
    }

    public function deleteProduct($id){
        $product = Product::find($id);

        Product::where('id', $id)->delete();
        return redirect('/');
    }
}
