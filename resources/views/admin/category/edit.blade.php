@extends('admin.layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card card-primery card-outline md-4">
        <div class="card-header">
            <div class="card-title"> Ctegory</div>
        </div>
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
        </div>

    </div>
    <form method="post" action="{{route('admin.category.update',$category->id)}}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="mb-3">
                <label for="name"> Nmae</label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}">
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                <div class="text-danger">
                    @error('slug')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#cat').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({

                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('category added successfully');
                    console.log(response);
                },
                error: function(xhr) {
                    alert('error');
                    console.log(xhr.responseText);
                }


            });

        });
    });
</script>