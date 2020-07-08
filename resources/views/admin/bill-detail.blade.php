@extends('admin.layouts.master')

@section('content')

    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <div class="card-header"><i class="fas fa-table mr-1"></i></div>
    <div class="card-body">
        <div class="table-responsive">
            <h2>Chi tiết hóa đơn</h2>
            <h4>Khách hàng</h4>
            <form action="{{ route('bill.update', $bill->id) }}" method="post">
                @csrf
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>Họ và tên</th>
                        <td>{{ $bill->customer->name}}</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>{{ $bill->customer->address }}</td>
                    </tr>
                    <tr>
                        <th>Số điện thoại</th>
                        <td>{{ $bill->customer->phone }}</td>
                    </tr>
                    <tr>
                        <th>Sản phẩm</th>
{{--                        {{ dd($bill->products) }}--}}
                        <td>@foreach($bill->products as $value)
                            {{ $value->name }}       ,
                            @endforeach</td>

                    </tr>
                    <tr>
                        <th>Tổng tiền</th>
                        <td>{{ $bill->totalPrice }}</td>
                    </tr>
                    <tr>
                        <th>Trạng thái đơn hàng</th>
                        <td>
                            <select name="status" id="">
                                <option value="Đang xử lý" @if($bill->status == "Đang xử lý")
                                selected
                                    @endif>
                                    Đang xử lý
                                </option>
                                <option value="Đang ship" @if($bill->status == "Đang ship" )
                                selected
                                    @endif>
                                    Đang ship
                                </option>
                                <option value="Hoàn thành" @if($bill->status == "Hoàn thành" )
                                selected
                                    @endif>
                                    Hoàn thành
                                </option>
                                <option value="Hủy bỏ" @if($bill->status == "Hủy bỏ" )
                                selected
                                    @endif>
                                    Hủy bỏ
                                </option>
                            </select>
                        </td>

                    </tr>

                </table>
                <div>
                    <button class="btn-primary" type="submit">Cập nhật trạng thái đơn hàng</button>
                </div>
            </form>


        </div>
    </div>
@endsection
