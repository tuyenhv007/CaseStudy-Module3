@extends('admin.layouts.master')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Điện thoại</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $customer)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->phone}}</td>
                <td><a href="{{route('customer.edit',$customer->id)}}">Sửa</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
