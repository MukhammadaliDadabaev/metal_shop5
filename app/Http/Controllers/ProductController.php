<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
//        $products = Product::with('category')->all();, compact('products')
        return view('product.index');
    }
}
