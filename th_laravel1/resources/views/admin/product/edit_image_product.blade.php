@extends('admin.layouts.app')
@section('content')
    <div class="view-edit-product">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('post-add-image-product',$product->id)}}" method="post" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <th>Product name</th>
                    <th><input readonly type="text" class="form-control" value="{{$product->product_name}}" name="product_name"></th>
                </tr>
                <tr>
                    <th>Product image</th>
                    <th>
                        <input type="file" class="form-control" name="product_image">
                    </th>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{route('list-image',$product->id)}}" class="btn btn-primary">Cancel</a>
                        </div>
                    </td>
                </tr>
            </table>
            {{csrf_field()}}
        </form>
        <script type="text/javascript">
            //CKEDITOR.replace( 'full_description' );
        </script>
    </div>
@endsection
