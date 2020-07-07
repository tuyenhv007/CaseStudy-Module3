@extends('admin.layouts.master');
@section('content')
<div class="col-md-12 pt-4">
    <div class="card">
        <div class="card-header">
            Add New Product
        </div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" name="quantity" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="desc">
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection;
