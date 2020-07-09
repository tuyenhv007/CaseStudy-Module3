@extends('admin.layouts.master')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Chỉnh sửa thông tin Sản Phẩm </h2>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('products.update',$product->id)}}" >
                    @csrf
                    <div class="form-group">
                        <label>Tên Sản phẩm</label>
                        <input style="width: 50%"  type="text" class="form-control" name="name" value="{{ $product->name }}" >
                    </div>
                    <div class="form-group">
                        <label>Giá cả</label>
                        <input style="width: 50%" type="text" class="form-control" name="price"  value="{{ $product->price }}" >
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input  style="width: 50%" class="form-control" name="decs" value="{{ $product->decs }}" >
                    </div>
                    <div class="form-group">
                        <label >Số lượng</label>
                        <input style="width: 50%" type="text" class="form-control" name="qty"  value="{{ $product->qty }}" >
                    </div>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
@endsection
