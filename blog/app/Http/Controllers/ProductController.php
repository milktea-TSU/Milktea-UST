<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::get();
        return view('product')->with('products', $products);
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.formedit',compact('product', 'id'));
    }
   

    public function insert(Request $rq)
    {
        $product = new Product();
        $product->name = $rq->name;
        $product->gia = $rq->gia;
        $product->save();
        return redirect('product');
    }
    public function postedit($id,Request $rq)
    {   
        $data = $rq->all();
        $productid = Product::find($id);
        $productid->name = $data['name'];
        $productid->gia = $data['gia'];
        $productid->save();
        return redirect('product');
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('product');

    }
}
