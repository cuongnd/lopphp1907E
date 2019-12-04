@extends('admin.layouts.app')
@section('content')
    <div class="view-list-categories">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>category name</th>
                    <th>parent id</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th><a href="{{route('them-danh-muc')}}" class="btn btn-primary" >Add new</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->parent}}</td>
                        <td><img class="image-category" src="{{url('/')}}/{{$category->image_category}}"></td>
                        <td>{{$category->description}}</td>
                        <td><a href="{{route('sua-danh-muc',$category->id)}}" class="btn btn-primary">Edit</a><a href="{{route('xoa-danh-muc',$category->id)}}" class="btn btn-primary">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
