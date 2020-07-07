
{{--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>--}}
{{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
{{--<!------ Include the above in your HEAD tag ---------->--}}
@extends('user.layouts.master-user')

@section('content')
<form class="form-horizontal" action='{{route('cart.payment')}}' method="POST">
    @csrf
    <fieldset>
        <div id="legend">
            <legend class=""> Thông tin khách hàng : </legend>
        </div>
        <div class="control-group">

            <label class="control-label"  for="username">Tên khách hàng</label>
            <div class="controls">
                <input type="text" id="username" name="name" placeholder="" class="input-xlarge">

            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">

            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Địa chỉ</label>
            <div class="controls">
                <input type="text" id="password" name="address" placeholder="" class="input-xlarge">

            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Số điện thoại</label>
            <div class="controls">
                <input type="text" id="password" name="phone" placeholder="" class="input-xlarge">

            </div>
        </div>
        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Ghi chú</label>
            <div class="controls">
                <textarea type="text" id="password" name="note" placeholder="" class="input-xlarge">
                </textarea>
            </div>
        </div>

        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button type="submit" class="btn btn-success">Xác nhận</button>
            </div>
        </div>
    </fieldset>
</form>


@endsection
