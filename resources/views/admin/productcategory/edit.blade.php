@extends('admin.layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card card-primery card-outline mb-4">
        <div class="card-header" style="background-color: #0a6ebd">
            <div class="card-title"> Product Caregory</div>
            <div class="card-tools">
                <a class="btn btn-secondry" style="background-color:rgb(230, 28, 129)" href="{{route('admin.productcategory.index')}}"> Back</a>
            </div>
        </div>
        <div class="container-fluid">
            @if(session('success'))
            <div class="alert alert-success">

                {{session('success')}}

            </div>
            @endif
        </div>
        <form method="post" action="{{route('admin.productcategory.update',$productc->id)}}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$productc->name}}">
                </div>
                <div class="mb-4">
                    <label for="product_id" class="form-label">Product</label>
                    <select class="form-select" id="product_id" required name="product_id">
                        <option disabled value="">Choose...</option>
                        @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $product->id == $productc->product_id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Please select a valid product.</div>
                </div>
                <div class="mb-4">
                    <label for="categorie_id" class="form-label">Category</label>
                    <select class="form-select" id="categorie_id" required name="categorie_id">
                        <option disabled value="">Choose...</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $productc->category_id  ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Please select a valid category.</div>
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