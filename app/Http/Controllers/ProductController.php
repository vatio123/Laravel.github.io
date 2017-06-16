<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller{
  public function index(){
    $products = DB::table('products')
    ->join('brands', 'brands.id', '=', 'products.idbrand')
    ->select('products.*', 'brands.name')->get();
    return view('products', ['products' => $products]);
  }

  public function cars(){
    $products = DB::table('products')
    ->join('brands', 'brands.id', '=', 'products.idbrand')
    ->select('products.*', 'brands.name')
    ->get()->where('idproducttype', 1);
    return view('products', ['products' => $products]);
  }

  public function motorbikes(){
    $products = DB::table('products')
    ->join('brands', 'brands.id', '=', 'products.idbrand')
    ->select('products.*', 'brands.name')
    ->get()->where('idproducttype', 2);
    return view('products', ['products' => $products]);
  }

  public function toInsertProductForm(){
    $producttypes = DB::table('producttypes')->get();
    $brands = DB::table('brands')->get();
    return view('addProductForm', ['producttypes' => $producttypes, 'brands' => $brands]);
  }

  public function create(Request $request){
    $this->validate($request, [
      'description' => 'required|min:3',
      'price' => 'required|min:0'
    ]);
    $products = new \App\Product();
    $products->id = null;
    $products->idproducttype = $request->idproducttype;
    $products->idbrand = $request->idbrand;
    $products->price = $request->price;
    $products->description = $request->description;
    $products->year = $request->year;
    $products->km = $request->km;
    $products->cc = $request->cc;
    $products->img = $request->img;
    $products->date = date('Y-m-d H:i:s');
    $products->iduser = 1;
    $products->save();
    return redirect('products');
  }

  public function delete($id){
    $product = \App\Product::find($id);
    $product->delete();
    return redirect('products');
  }

  // mostra la vista form product passant-li l'product
  public function updateForm($id){
    $product = \App\Products::find($id);
    return view('formproduct', ['product' => $product]);
  }
  //Actualitza l'product a la base de dades
  public function update(Request $request){
    $this->validate($request, [
      'name' => 'required|min:5',
      'description' => 'required|min:8',
      'price' => 'required|min:0'
    ]);
    $id = $request->input('id');
    $product = \App\Products::find($id);
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->save();
    return redirect('products');
  }

  public function productsDetail($id){
    $products = DB::table('products')
    ->join('brands', 'brands.id', '=', 'products.idbrand')
    ->select('products.*', 'brands.name')->where('products.id',$id)
    ->get();
    $product = $products[0];
    return view('productsDetail', ['product' => $product]);
  }

  public function reservation(Request $request){
    $user = $request->session()->get('user');
    $deal = new \App\Deal();
    $deal->id = null;
    $deal->idproduct = $request->idproduct;
    $deal->idseller = $request->idseller;
    $deal->idbuyer = $user[0]->id;
    $deal->datereservation = date('Y-m-d H:i:s');
    $deal->save();
    return redirect('products');
  }

}
