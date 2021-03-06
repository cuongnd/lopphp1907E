@extends('admin.layouts.app')
@section('content')
    <div class="view-gallery">
        <h3>{{$product->product_name}}</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th><a href="{{route('add-image-product',$product->id)}}" class="btn btn-primary">Add new</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list_image as $image)
                <tr>
                    <td nowrap><img class="product-image" src="{{url('/')}}/{{$product->image}}"></td>
                    <th nowrap>
                        <button class="btn btn-primary">Delete</button>
                    </th>
                </tr>
            @endforeach
            </tbody>
            <tr>
                <td colspan="3">
                    <div class="pull-right">
                        <a href="{{route('danh-sach-san-pham')}}" class="btn btn-primary">Back to list product</a>
                    </div>
                </td>
            </tr>

        </table>
    </div>
@endsection
