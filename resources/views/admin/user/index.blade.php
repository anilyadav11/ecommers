@extends('admin.layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Simple Full Width Table</h3>
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

                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $users)
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>

                        <td>{{$users->phone}}</td>
                        <td>{{$users->address}}</td>
                        <td>{{$users->status}}</td>
                        <td>

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