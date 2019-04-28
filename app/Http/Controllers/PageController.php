<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class PageController extends Controller
{
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


    public function showCategory(Category $category)
    {
        $categories = Category::all();
        return view('categories.show', compact('category', 'categories'));
    }

    public function showProduct(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
