@extends('admin.layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Category</h3>
            <div class="card-tools">
                <a class="btn btn-secondry"> Back</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>

                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                            <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-success">Edit</a>
                            <form action="{{route('admin.category.destroy',$category->id)}}" method="post" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>


                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>
@endsection