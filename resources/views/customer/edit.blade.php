@extends('admin.layouts.master')
@section('content')
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.dashboard') }}">Dashboard </a>
        </li>
        <li class="breadcrumb-item active"><a href="{{route('customer.index')}}">List </a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <div class="card">
        <div class="card-header">
            <h2>Chỉnh sửa thông tin khách hàng</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="col-12">
                        <form method="post" action="{{route('customer.update',$customer->id)}}">
                            @csrf
                            <div class="form-group">
                                <label><strong>Tên khách hàng</strong></label>
                                <input style="width: 50%" type="text" class="form-control" name="name"
                                       value="{{ $customer->name }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Email</strong></label>
                                <input style="width: 50%" type="text" class="form-control" name="email"
                                       value="{{ $customer->email }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Địa chỉ</strong></label>
                                <textarea style="width: 50%" class="form-control" name="address" required>{{ $customer->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label><strong>Điện thoại</strong></label>
                                <input style="width: 50%" type="text" class="form-control" name="phone"
                                       value="{{ $customer->phone }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                                <a href="{{ route('customer.index') }}" class="btn btn-secondary">Hủy bỏ</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

