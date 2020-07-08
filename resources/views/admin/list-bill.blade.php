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
            <div class="row">
                <div class="col-12 col-md-1">
                    <a href="#" class="btn btn-success mb-2">Create</a>
                </div>
                <div class="col-12 col-md-4">
                    <!-- Basic dropdown -->
                    <button class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">See
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item">
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" data-id="data-name"
                                       id="checkbox-name" checked>
                                <label class="custom-control-label" for="checkbox-name">Name</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" data-id="data-email"
                                       id="checkbox-email" checked>
                                <label class="custom-control-label" for="checkbox-email">Email</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" id="checkbox3"
                                       checked>
                                <label class="custom-control-label" for="checkbox3">Birthday</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox4" checked>
                                <label class="custom-control-label" for="checkbox4">Role</label>
                            </div>
                        </a>
                    </div>
                    <!-- Basic dropdown -->
                </div>
                <div class="col-12 col-md-7">
                    <input class="form-control mr-sm-2" id="search-user" type="search" placeholder="Search"
                           aria-label="Search">
                </div>
            </div>

            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã Bill</th>
                    <th class="data-name">Id Khách hàng</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>

                </tr>
                </thead>
                <tbody id="list-user">
                @foreach($bills as $key => $bill)
                    <tr class="data-user">
                        <td>{{ ++$key }}</td>
                        <td><a href="{{ route('bill.detail', $bill->id) }}">MD-{{ $bill->id }}</a></td>
                        <td>{{ $bill['customer_id'] }}</td>
                        <td>{{ $bill['status']}}</td>
                        <td>{{ $bill['created_at'] }}</td>

                    </tr>
                @endforeach()
                </tbody>
            </table>
        </div>
    </div>
@endsection
