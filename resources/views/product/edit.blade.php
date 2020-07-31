@extends('admin.layouts.master')
@section('content')
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.dashboard') }}">Dashboard </a>
        </li>
        <li class="breadcrumb-item active"><a href="{{route('product.index')}}">List </a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <div class="card">
        <div class="card-header">
            <h2>Chỉnh sửa thông tin sản phẩm</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-12">
                    <form method="post" action="{{route('product.update',$product->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label><strong>Tên sản phẩm</strong></label>
                            <input style="width: 50%" type="text" class="form-control" name="name"
                                   value="{{ $product->name }}" required>
                        </div>
                        <div class="form-group">
                            <label><strong>Giá</strong></label>
                            <input style="width: 50%" type="text" class="form-control" name="price"
                                   value="{{ $product->price }}" required>
                        </div>
                        <div class="form-group">
                            <label><strong>Mô Tả</strong></label>
                            <textarea style="width: 50%" class="form-control" name="decs"
                                      required>{{ $product->decs }}</textarea>
                        </div>
                        <div class="form-group">
                            <label><strong>Số lượng</strong></label>
                            <input style="width: 50%" type="text" class="form-control" name="qty"
                                   value="{{ $product->qty }}" required>
                        </div>
                        <div class="form-group">
                            <label><strong>Image</strong></label>
                            <img style="width: 100px" src={{asset("storage/".$product->image)}}>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                            <a href="{{ route('product.index') }}" class="btn btn-secondary">Hủy bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
