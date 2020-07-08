<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.list', compact('products'));
    }

    public function add()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->decs = $request->decs;
        $product->qty = $request->qty;
        if ($request->hasFile('image')) {
            $path = $request->image->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('product.index');
    }
}
