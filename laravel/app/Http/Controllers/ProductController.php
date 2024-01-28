<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view("product", compact("data"));
    }

    public function show($id)
    {
        $data = Product::find($id);
        return view("product", compact("data"));
    }
}
