<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function creact(){
    return view('product.creact');
  }
  public function index(){
    $products=Product::all();
    return view('product.index',compact('products'));
  }

  public function add(Request $request){
    $number=mt_rand(10000000000000,999999999999999999);

    if($this->productCodeExists($number)){
      $number=mt_rand(10000000000000,999999999999999999);
    }
    $request['codebar']=$number;
    Product::create($request->all());
    return redirect('all');

  }

  public function productCodeExists($number){
    return Product::wherecodebar($number)->exists();
  }
}
