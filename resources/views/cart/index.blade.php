<!doctype html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <title> </title>
    @toastr_css
</head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{asset('css/cart.css')}}" rel="stylesheet" >
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('shop-home')}}">CodeGym Computer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="{{route('shop-home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('cart.index') }}">Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="{{ route('cart.index') }}">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">{{\Illuminate\Support\Facades\Session::get('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQty : 0 }}</span>
                </a>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Giỏ hàng của bạn</h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped" >
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col" class="text-center">Product</th>
                        <th scope="col" class="text-center">Available</th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col" class="text-right">Price</th>
                        <th scope="col" class="text-right">Total Price</th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>

                    </tr>
                    </thead>
                    <tbody>
                    @empty(!$cart)
                        @foreach($cart->items as $item)
                    <tr>
                        <td class="text-center"><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td class="text-center">{{ $item['item']->name }}</td>
                        <td class="text-center">In stock</td>
                        <form action="{{route('cart.update',$item['item']->id)}}" method="post">
                            @csrf
                            <td style="width: 15%">
                                <input type="number" name="qty"  min="1" class="form-control" value="{{ $item['totalQty'] }}">
                            </td>
                        <td class="text-right">{{number_format($item['item']->price)}} VNĐ</td>
                        <td class="text-right">{{number_format($item['totalPrice'])}} VNĐ</td>
                            <td class="text-right"><button type="submit" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i> </button> </td>
                        <td class="text-right"><a href="{{route('cart.remove',$item['item']->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </form>

                    </tr>
                        @endforeach

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"><strong>Total</strong></td>
                        <td class="text-right"><strong>{{number_format($cart->totalPrice)}} VNĐ</strong></td>
                        <td colspan="2"></td>
                    </tr>
                    </tbody>

                </table>

            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="{{route('shop-home')}}" class="btn btn-lg btn-block btn-success text-uppercase">Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="{{route('cart.checkout')}}" class="btn btn-lg btn-block btn-success text-uppercase">Checkout</a>
                </div>
            </div>
        </div>
        @else
            <table>
            <tr><td colspan="6">
                    Chưa có sản phẩm nào trong giỏ hàng
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('shop-home')}}">Continus Shoping </a>
                <td>
            </tr>
            </table>
        @endempty
    </div>
</div>
</body>
@jquery
@toastr_js
@toastr_render
</html>
