<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        $product=Product::take(6)->get();
        return view ('welcome', compact('product'));
    }
}
