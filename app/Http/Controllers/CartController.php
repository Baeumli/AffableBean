<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    public function index() {
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        return view('/cart', compact('cart'));
    }

    public function addToCart($id) {
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $id;
        $cart->quantity = 5;
        $cart->save();
        return redirect('/cart');
    }

    public function removeFromCart(Request $request) {
        $cart = Cart::where('user_id', auth()->user()->id);
    }

    public function clearCart() {
        $cart = Cart::where('user_id', auth()->user()->id);
        $cart->delete();
        return redirect('/cart');
    }

    public function updateCart(Request $request) {

    }
}
