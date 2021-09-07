<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $subjudul = 'Katalog lengkap';
        $products = Product::all(); //koneksi ke model
        return view('products.index',compact(['products','subjudul']));
    }
    public function create() {
        $subjudul = 'Katalog lengkap';
        return view('products.create',compact(['subjudul']));
         
        // return view('products.index',compact(['subjudul']));
    }
}
