@extends('admin.layouts.master')
@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card">
        <div class="card-header">
            <h2>Danh sách hóa đơn</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr class="table-info">
                            <th>STT</th>
                            <th>Mã Bill</th>
                            <th class="data-name">Khách hàng</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                        </tr>
                        </thead>
                        <tbody id="list-user">
                        @foreach($bills as $key => $bill)
                            @if($bill['status'] == "Đang xử lý")
                                <tr class="data-user">
                                    <td>{{ ++$key }}</td>
                                    <td><a href="{{ route('bill.detail', $bill->id) }}">MD-{{ $bill->id }}</a></td>
                                    <td>{{ $bill->customer->name }}</td>
                                    <td class="@if($bill['status'] == "Hoàn thành")
                                        text-success
@elseif ($bill['status'] == "Đang xử lý")
                                        text-warning
@elseif($bill['status'] == "Đang giao")
                                        text-primary
@else
                                        text-danger
@endif">{{ $bill['status']}}</td>
                                    <td>{{ $bill['created_at'] }}</td>
                                </tr>
                            @endif
                        @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
