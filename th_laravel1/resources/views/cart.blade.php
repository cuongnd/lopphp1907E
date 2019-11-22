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
            </table>
        </div>
    </div>
@endsection
