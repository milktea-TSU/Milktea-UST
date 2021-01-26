<?php

namespace App\Providers;

use App\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('order.index', function ($view) {
            if (Session('cart')) {
                $oldCart = FacadesSession::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart' => FacadesSession::get('cart'), 'product_card' => $cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }
}
