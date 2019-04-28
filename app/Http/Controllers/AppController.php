<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class AppController extends Controller
{
    public function changeLocale(Request $request) {
        $lang = $request->input('lang');
        if (App::isLocale('en')) {
            if ($lang == 'cz') {
                App::setLocale('cz');
            }
        } else if (App::isLocale('cz')) {
            if ($lang == 'en') {
                App::setLocale('en');
            }
        }
        return redirect('/');
    }
    
}
