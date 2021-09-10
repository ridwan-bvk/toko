<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function index()
    {   // ngambil data dari model
        $products = Product::all();
        return response()->json(['message'=>'succes', 'data'=>$products]);
    }
}
