<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Session;
use App\Order;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('checkout');
    }

    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function cart()
    {
        $cart = Order::where('user_id', auth()->user()->id)->first();
        return view('cart', compact('cart'));
    }

    public function showCategory(Category $category)
    {
        $categories = Category::all();
        return view('categories.show', compact('category', 'categories'));
    }

    public function showProduct(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function checkout(Request $request)
    {
        $total = $request->input('total');
        $user = auth()->user();
        return view('checkout', compact('total', 'user'));
    }
}
