<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $user = Auth::user();
        return view('product.index', ['name' => $user->name])->with('products', $products);
    }
   


    public function create()
    {
        $user = Auth::user();
        return view('product.create', ['name' => $user->name]);
    }
    public function store(Request $request)
    {
        if ($request->hasfile('filename')) {
            $imgPath=request('filename')->store('img','public');
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $imgPath
            ]);
            $product->save();
        }
        
        return redirect()->back();
    }
    public function edit($id){
        $product = Product::find($id);
        $user = Auth::user();
        return view('product.edit', ['name' => $user->name],compact('product','id'));
    }
    public function update(Request $request,$id){
        $data = $request->all();
        $product = Product::find($id);
        $product->name = $data['name'];
        $product->price = $data ['price'];
        if ($request->hasfile('filename')){
            $imgPath=$data['filename']->store('img','public');
            $product->image = $imgPath;
        }
        $product->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $user = Auth::user();
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
    public function getAddToCart(Request $req ,$id){
        $product = Product::find($id);
        $oldCart=Session('cart')?FacadesSession::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->add($product,$id);   
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getDeleteToCart($id){
        $product = Product::find($id);
        $oldCart=Session('cart')?FacadesSession::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->reduceByOne($id);   
        session()->put('cart',$cart);
        return redirect()->back();
    }
   
}
