@extends('admin.layouts.app')
@section('content')
    <div class="view-edit-category">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('post-them-category',$category->id)}}" method="post"  enctype="multipart/form-data">
            <table class="table  table-bordered">
                <tr>
                    <th>Category name</th>
                    <td><input type="text" class="form-control" value="{{$category->category_name}}" name="category_name"></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        <img class="image-categoy-edit" src="{{url('/')}}/{{$category->image_category}}"/>
                        <input type="file" name="image_category" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>ordering</th>
                    <td><input type="text" name="ordering" {{$category->ordering}} class="form-control"></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>
                        <textarea name="description" class="form-control">{{$category->description}}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a class="btn btn-primary" href="{{route('list-danh-muc')}}">Cancel</a>
                    </td>
                </tr>
            </table>
            {{csrf_field()}}
        </form>
    </div>
@endsection