<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Product;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo=$productRepo;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    public function create($request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->decs = $request->decs;
        $product->qty = $request->quantity;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('image', 'public');
            $product->image = $path;
        } else {
            $product->image = 'images/default.jpg';
        }
        $this->productRepo->save($product);
    }

    public function findId($id)
    {
        return $this->productRepo->findById($id);
    }

    public function update($product, $request)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->decs =$request->decs;
        $product->qty =$request->qty;
        $this->productRepo->save($product);
    }

    public function delete($product)
    {
        $this->productRepo->deleteProduct($product);
    }
}
