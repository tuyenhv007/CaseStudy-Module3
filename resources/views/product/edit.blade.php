@extends('admin.layouts.master')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Chỉnh sửa thông tin sản phẩm </h2>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input style="width: 50%"  type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input style="width: 50%" type="text" class="form-control" name="price"  value="{{ $product->price }}" required>
                    </div>
                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea  style="width: 50%" class="form-control" name="decs"  required>{{ $product->decs }}</textarea>
                    </div>
                    <div class="form-group">
                        <label >Số lượng</label>
                        <input style="width: 50%" type="text" class="form-control" name="qty"  value="{{ $product->qty }}" required>
                    </div>
                    <div class="form-group">
                        <label >Image</label>
                        <img style="width: 100px" src={{asset("storage/".$product->image)}}>
                        <input type="file"  name="image" >
                    </div>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
@endsection
