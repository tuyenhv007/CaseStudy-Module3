@extends('admin.layouts.master')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Thêm mới sản phẩm </h2>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input style="width: 50%" type="text" class="form-control" name="name"   required>
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input style="width: 50%" type="text" class="form-control" name="price"   required>
                    </div>
                    <div class="form-group">
                        <label >Mô Tả</label>
                        <textarea style="width: 50%" class="form-control" name="decs" required></textarea>
                    </div>
                    <div class="form-group">
                        <label >Số lượng</label>
                        <input style="width: 50%" type="text" class="form-control" name="qty" required>
                    </div>
                    <div class="form-group">
                        <label >Image</label>
                        <input type="file"  name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
