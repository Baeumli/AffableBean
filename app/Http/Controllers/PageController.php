<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Session;

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
        $products = collect();
        if (Session::has('products')) {
            $items = Session::get('products');
            $quantities = collect($items)->countBy();
            $products = Product::whereIn('id', $items)->get();

            $products->map(function ($product) use ($quantities) {
                $product['quantity'] = $quantities[$product->id];
                $product['total'] = number_format($product->price * $quantities[$product->id], 2);
                return $product;
            });
        }
        return view('cart', compact('products'));
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
        return view('checkout', compact('total'));
    }
}
