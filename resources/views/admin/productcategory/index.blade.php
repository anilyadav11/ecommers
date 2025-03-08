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
                        <th>Category</th>
                        <th>Product</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productc as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->category ? $category->category->name : 'N/A'}}</td>
                        <td>{{$category->product ? $category->product->name : 'N/A'}}</td>
                        <td>
                            <a href="{{ route('admin.productcategory.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>

                            <form action="{{ route('admin.productcategory.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
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