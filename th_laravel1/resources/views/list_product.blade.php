@extends('layouts.app')

@section('content')
    <div class="view-list-product">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div class="discount-products">
                <div class="wrapper-title-item-product"><h3 class="title-discount-product">{{$category->categor_name}}</h3></div>

                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="product-item">
                                <div class="product-item-content">
                                    <div class="pin-sale">Sale</div>
                                    <div class="pin-new">New</div>
                                    <div class="wrapper-image">
                                        <img class="product-image-intro" src="{{url('/')}}/{{$product->product_image_intro}}">
                                    </div>
                                    <h4 class="product-name">{{$product->product_name}}</h4>
                                    <div class="prices">
                                        <span class="sale-price">{{$product->sale_price}}</span>
                                        <span class="price">{{$product->price}}</span>
                                        <span class="currency">đ</span>
                                    </div>
                                    <a href="{{route('product-detail',$product->id)}}" class="btn btn-primary btn-block"><i class="fas fa-search-plus"></i> Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
