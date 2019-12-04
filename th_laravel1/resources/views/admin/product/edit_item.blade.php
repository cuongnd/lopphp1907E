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
        <form action="{{route('post-sua-san-pham',$product->id)}}" method="post" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <th>Product name</th>
                    <th><input type="text" class="form-control" value="{{$product->product_name}}" name="product_name"></th>
                </tr>
                <tr>
                    <th>Ordering</th>
                    <th>
                       <input type="text" name="ordering" value="{{$product->ordering}}" class="form-control">
                    </th>
                </tr>
                <tr>
                    <th>Description</th>
                    <th>
                        <textarea class="form-control" name="description">{{$product->description}}</textarea>
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{route('danh-sach-san-pham')}}" class="btn btn-primary">Cancel</a>
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
