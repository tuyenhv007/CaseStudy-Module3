@extends('admin.layouts.master')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Hình ảnh</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $product)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price) }} VNĐ</td>
                <td>{{ $product->decs }}</td>
                <td>{{ $product->qty }}</td>
                <td><img style="width: 100px" src={{asset("storage/".$product->image)}}></td>
                <td><a href="{{route('product.edit',$product->id)}}">Sửa</a></td>
                <td><a href="{{ route('product.delete', $product->id) }}"  class="text-danger"
                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
