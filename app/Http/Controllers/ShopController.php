<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    Public function index()
    {
        return view ('shop.index');
    }
    Public function show()
    {
        return view ('shop.show');
    }
}
