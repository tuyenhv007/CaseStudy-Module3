@extends('admin.layouts.master')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Chỉnh sửa thông tin khách hàng </h2>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('customer.update',$customer->id)}}" >
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input style="width: 50%"  type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input style="width: 50%" type="text" class="form-control" name="email"  value="{{ $customer->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea  style="width: 50%" class="form-control" name="address"  required>{{ $customer->address }}"</textarea>
                    </div>
                    <div class="form-group">
                        <label >Điện thoại</label>
                        <input style="width: 50%" type="text" class="form-control" name="phone"  value="{{ $customer->phone }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
@endsection

