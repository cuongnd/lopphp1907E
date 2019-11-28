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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach (Cart::content() as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->price*$item->qty}}</td>
                            <td>
                                <form action="{{route('remove-item-cart',$item->rowId)}}" method="post">
                                    <button class="btn btn-primary">Delete</button>
                                    {{csrf_field()}}
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Tổng</td>
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
