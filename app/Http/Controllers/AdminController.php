<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.index')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

}
