@extends('layouts.app')
@section('content')
    <div class="view-cart">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                </tr>
                </thead>
                <tbody>

                @foreach (Cart::content() as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->price*$item->qty}}</td>
                    </tr>

                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Tổng</td>
                        <td >{{Cart::total()}}</td>
                    </tr>
                </tfoot>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{route('thanh-toan')}}">Thanh toán</a>
                        <a class="btn btn-primary" href="{{route('home')}}">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
