<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    Public function index()
    {
        $products = Product::paginate(6);
        return view ('shop.index', compact('products'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(6);
        return view('shop.index', compact('products', 'categories'));

    }
    Public function show($id)
    {
        $product = Product::findOrFail($id);
        return view ('shop.show', compact('product'));
    }
}
