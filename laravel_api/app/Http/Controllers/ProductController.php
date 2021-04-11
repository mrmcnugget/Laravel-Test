<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
        
    }
    public function store(Request $request)
    {
        return product::create($request->all());
    }
    public function show ($id)
    {
        
    }
}
