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

    public function store(Request $request){ //ngambil data dari form
       //cara insert ke db,syarat harus sama name dg field db
       Product::create($request->all());

       return redirect('/products');
    }
    public function edit($id){
        $product = product::find($id);
        return view('products.edit',compact(['product']));
    }

    public function update(Request $request,$id){
        $product = product::find($id);
        $product->update($request->all() ); //caraupdate laravel
        return redirect('/products');
    }

    

}
