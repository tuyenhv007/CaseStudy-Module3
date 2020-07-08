<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;

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
}
