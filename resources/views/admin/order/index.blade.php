@extends('admin.layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header" style="background-color: #0a6ebd">
            <h3 class="card-title">All Products</h3>
            <div class="card-tools">
                <a class="btn btn-secondry" style="background-color:rgb(230, 28, 129)" href="{{route('admin.dashboard')}}"> Back</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>

                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td><img src="{{asset('uploads/'.$product->image)}}" alt="" width="80" height="80px"></td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>
                            <form method="post" action="{{route('product.status.update',$product->id)}}" class="form-status">
                                @csrf
                                @Method('PUT')
                                <button type="submit" class="btn btn-sm toggle-btn {{$product->status =='active' ? 'btn-success' :'btn-danger'}}">
                                    {{$product->status =='active' ? 'Active': 'Inactive'}}
                                </button>
                                <input type="hidden" name="status" value="{{$product->status == 'active' ? 'inactive' : 'active'}}">
                            </form>
                        </td>
                        <td>

                            <a href=" {{route('admin.product.edit',$product->id)}}" class="btn btn-success btn-sm">Edit</a>
                            <form action="{{route('admin.product.destroy',$product->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Product ?')">Delete</button>
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