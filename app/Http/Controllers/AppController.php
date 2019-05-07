<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AppController extends Controller
{
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

    // public function addToCart($id) {
    //     Session::push('products', $id);
    //     return redirect()->back();
    // }

    // public function removeFromCart($id) {
    //     $products = session()->pull('products', []);
    //     if(($key = array_search($id, $products)) !== false) {
    //         unset($products[$key]);
    //     }
    //     session()->put('products', $products);
    //     return redirect()->back();
    // }

    // public function clearCart()  {
    //     Session::forget('products');
    //     Session::save();
    //     return redirect('/cart');
    // }
}
