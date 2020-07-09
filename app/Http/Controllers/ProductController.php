<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('product.list', compact('products'));
    }

    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        $this->productService->create($request);
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = $this->productService->findId($id);
        return view('product.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product= $this->productService->findId($id);
        $this->productService->update($product, $request);
        toastr()->success('chinh sua thong tin san pham thanh cong','success');
        return redirect()->route('products.index');
    }

    public function delete($id)
    {
        $product = $this->productService->findId($id);
        $this->productService->delete($product);
        toastr()->success("Delete Success!");
        return redirect()->route('products.index');
    }
}
