@extends('admin.layouts.app')
@section('content')


<div class="col-md-12">
    <!--begin::Quick Example-->
    <div class="card card-primary card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header" style="background-color: #0a6ebd">
            <div class="card-title">Category Edit</div>
            <div class="card-tools">
                <a class="btn btn-secondry" style="background-color:rgb(230, 28, 129)" href="{{route('admin.category.index')}}"> Back</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <div class="container-fluid">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}

            </div>
            @endif
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
        <!--end::Form-->
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