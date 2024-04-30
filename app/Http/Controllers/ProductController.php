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
}
