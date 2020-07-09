@extends('admin.layouts.master')
@section('content')
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <div class="card-header"><i class="fas fa-table mr-1"></i></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>ViewScore</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>ViewScore</th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>

                @forelse($products as $key => $product)
                    <tr>
                        <td width="50">{{ ++$key }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->decs }}</td>
                        <td>{{ $product->qty }}</td>
                        <td><img src="{{ asset('storage/' . $product->image) }}" alt="" width="100"></td>

                        <td>
                            <a href="{{route('products.update',$product->id)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a onclick="return confirm('ban chac chan muon xoa?')" href="{{route('products.delete',$product->id)}}" style="color: red">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
