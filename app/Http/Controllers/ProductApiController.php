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

    public function show($id){
        $products = Product::find($id);
        return response()->json(['mesage'=>'succes','data'=>$products]);
    }

    public function store(Request $request){ //ngambil data dari form
        $product = Product::create($request->all());
        return response()->json(['message'=>'succes','data'=>$product]);
     }

    public function update(Request $request,$id){
        $product = product::find($id);
        $product->update($request->all() ); //caraupdate laravel
        return response()->json(['message'=>'sucees','data'=>$product]);
    }

    Public function destroy($id){
        $product = product::find($id) ;
        $product->delete();
        return response()->json(['message'=>'delete Sucees','data'=>null]); //karena sudah didelte jadi tidak bisa ditampilkan
   }
}
