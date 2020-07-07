<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function addToCart($idProduct)
    {
        $product = $this->product->findOrFail($idProduct);
        $oldCart=Session::get('cart');
        $newCart =new Cart($oldCart);
        $newCart->add($product);
        Session::put('cart',$newCart);
        toastr()->success('Thêm sản phẩm vào giỏ hàng thành công', 'Success');
        return back();
    }
    public function index(){
        return view('cart/index');
    }
}
