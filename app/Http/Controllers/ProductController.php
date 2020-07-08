<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    public function __construct(ProductService $product)
    {
        $this->product=$product;
    }
    public function index()
    {
        $products = $this->product->getAll();
        return view('product.list',compact('products'));
    }
    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        dd($request);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->decs = $request->decs;
        $product->qty = $request->quantity;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('image','public');
            $product->image = $path;
        } else {
            $product->image = 'images/default.jpg';
        }
        $product->save();
        return redirect()->route('products.index');
    }
    public function edit()
    {

    }
    public function delete()
    {

    }
}
