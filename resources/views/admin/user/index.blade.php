@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header" style="background-color: #0a6ebd">
            <h3 class="card-title">All Users</h3>
            <div class="card-tools">
                <a class="btn btn-secondary" style="background-color:rgb(230, 28, 129)" href="{{ route('admin.dashboard') }}">Back</a>
            </div>
        </div>
        <div class="container-fluid">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}

            </div>
            @endif
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <form action="{{ route('admin.user.status.update', $user->id) }}" method="POST" class="status-form">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn toggle-btn {{ $user->status == 'active' ? 'btn-success' : 'btn-danger' }}">
                                    {{ $user->status == 'active' ? 'Active' : 'Inactive' }}
                                </button>
                                <input type="hidden" name="status" value="{{ $user->status == 'active' ? 'inactive' : 'active' }}">
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