@extends('admin.layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card card-primery card-outline mb-4">
        <div class="card-header">
            <div class="card-title"> Product Caregory</div>
        </div>
        <div class="container-fluid">
            @if(session('success'))
            <div class="alert alert-success">

                {{session('success')}}

            </div>
            @endif
        </div>
        <form method="post" action="{{route('admin.productcategory.store')}}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                </div>
                <div class="mb-4">
                    <label for="validationCustom04" class="form-label">Product Id</label>
                    <select class="form-select" id="validationCustom04" required name="product_id">
                        <option selected disabled value="">Choose...</option>
                        @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Please select a valid state.</div>

                </div>
                <div class="mb-4">
                    <label for="validationCustom04" class="form-label">Category Id</label>
                    <select class="form-select" id="validationCustom04" required name="categorie_id">
                        <option selected disabled value="">Choose...</option>
                        @foreach($categories as $categories)
                        <option value="{{$categories->id}}">{{$categories->name}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Please select a valid state.</div>

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
        $('#productcategory').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                containtType: false,
                header: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('added successfully');
                    console.log(response);
                },
                error: function(xhr) {
                    alert('fail');
                    console.log(xhr.responseText);
                }

            })

        })
    });
</script>