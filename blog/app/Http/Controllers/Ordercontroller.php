<?php

namespace App\Http\Controllers;

use Session;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class Ordercontroller extends Controller
{
    public function index()
    {
        $products = Product::get();
        $user = Auth::user();
        return view('order.index', ['name' => $user->name, 'products' => $products]);
    }

    public function store()
    {
        $carts = FacadesSession::get('cart');
        $order = Order::create([
            'tong'=>$carts->totalPrice,
            'ngayban'=>now(),
            'user_id'=>Auth::id()
        ]);
        $order->save();
        Session()->forget('cart');
        return redirect()->back();
    }
    public function showHistory(){
        $orders = Order::get()->toArray();
        $user = Auth::user();
        return view('history.index', ['name' => $user->name])->with('orders', $orders);
    }
    public function showInfo(){
        $orders = Order::get()->toArray();
        $user = Auth::user();
        return view('infomation.index', ['name' => $user->name]);
    }
    public function showRevenue(){
        $orders = Order::all();
        $sum = 0;
        foreach($orders as $order){
            $sum+=$order->tong;
        }
        $user = Auth::user();
        return view('revenue.index', ['name' => $user->name])->with('sum',$sum);
    }
    public function showNhaplieu(){
       
        $user = Auth::user();
        return view('nhaplieu.index', ['name' => $user->name]);
    }
}
