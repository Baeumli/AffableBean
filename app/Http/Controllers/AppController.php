<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Order;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function changeLocale(Request $request) {
        $lang = $request->input('lang');

        App::isLocale('en') ?n ($lang == 'cz' ? App::setLocale('cz') : null ) : ($lang == 'en' ? App::setLocale('en') : null); 
        return App::getLocale();
        // if (App::isLocale('en')) {
        //     if ($lang == 'cz') {
        //         App::setLocale('cz');
        //     }
        // } else if (App::isLocale('cz')) {
        //     if ($lang == 'en') {
        //         App::setLocale('en');
        //     }
        // }
        return redirect('/');
    }

    public function addToCart($id) {
        $user_id = auth()->user()->id;
        $order = Order::where('user_id', $user_id)->first();
        if ($order == null) {
            $order = new Order();
            $order->user_id = $user_id;
            $order->save();
        }
        
        if (!$order->products->contains($id)) {
            $order->products()->attach($id);
        }

        $product = $order->products()->where('id', $id)->first();
        $product->pivot->quantity += 1;
        $product->pivot->save();
        $order->total_price += ($product->pivot->quantity * $product->price);
        $order->save();
        return redirect()->back();
    }

    public function clearCart()  {
        $user_id = auth()->user()->id;
        $order = Order::where('user_id', $user_id)->first();
        $order->products()->detach();
        $order->total_price = null;
        $order->save();
        return redirect('/cart');
    }
}
