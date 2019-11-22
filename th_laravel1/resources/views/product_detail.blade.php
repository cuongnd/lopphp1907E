@extends('layouts.app')

@section('content')
    <div class="view-product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            gallery
                        </div>
                        <div class="col-md-6">
                            <form action="{{route('add-to-cart',$product->id)}}" method="post">
                                <h3>{{$product->product_name}}</h3>
                                <div>{{$product->description}}</div>
                                <div class="prices">
                                    <span class="sale-price">{{$product->sale_price}}</span>
                                    <span class="price">{{$product->price}}</span>
                                    <span class="currency">đ</span>
                                </div>
                                <div class="quality"><span class="quality">Số lượng</span>
                                    <select name="quality">
                                        @for($i=1;$i<=10;$i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor;
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Thêm hàng</button>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
