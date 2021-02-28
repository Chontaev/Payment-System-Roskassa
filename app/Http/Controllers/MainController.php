<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('index',compact('products'));
    }
    public function show($id){
        $product = Product::find($id);
        return view('main.show',compact('product'));
    }

    
}
