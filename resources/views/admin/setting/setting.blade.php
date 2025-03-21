@extends('admin.layouts.app')
@section('content')
<div class="col-md-12">
    <!--begin::Quick Example-->
    <div class="card card-primary card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header" style="background-color: #0a6ebd">
            <div class="card-title">Website Settings</div>
            <div class="card-tools">
                <a class="btn btn-secondry" style="background-color:rgb(230, 28, 129)" href="{{route('admin.dashboard')}}"> Back</a>
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
        <form method="post" action="{{route('admin.settings.update',$setting->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!--begin::Body-->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="Title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="name" name="title" aria-describedby="emailHelp" value="{{$setting->title}}" />
                            <div class="text-danger">
                                @error('title')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="price" name="email" aria-describedby="emailHelp" value="{{$setting->email}}" />
                            <div class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="Phone Number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="name" name="phone" aria-describedby="emailHelp" value="{{$setting->phone}}" />
                            <div class="text-danger">
                                @error('phone')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" aria-describedby="emailHelp" value="{{$setting->address}}" />
                            <div class="text-danger">
                                @error('address')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="Linkedin" class="form-label">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" aria-describedby="emailHelp" value="{{$setting->linkedin}}" />
                            <div class="text-danger">
                                @error('linkedin')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="Facebook" class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook" aria-describedby="emailHelp" value="{{$setting->facebook}}" />
                            <div class="text-danger">
                                @error('facebook')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="Twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control" name="twitter" aria-describedby="emailHelp" value="{{$setting->twitter}}" />
                            <div class="text-danger">
                                @error('twitter')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="Price" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="price" name="instagram" aria-describedby="emailHelp" value="{{$setting->instagram}}" />
                            <div class="text-danger">
                                @error('instagram')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Twitter" class="form-label">Logo</label>
                        <div class="input-group mb-3">

                            <img src="{{asset('uploads/setting/'.$setting->logo)}}" alt="" width="80" height="80px">
                            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" />
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            @error('logo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="Twitter" class="form-label">Footer Logo</label>
                        <div class="input-group mb-3">
                            <img src="{{asset('uploads/setting/'.$setting->footerlogo)}}" alt="" width="80" height="80px">
                            <input type="file" class="form-control @error('footerlogo') is-invalid @enderror" name="footerlogo" />
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            @error('footerlogo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="Twitter" class="form-label">Favicon</label>
                        <div class="input-group mb-3">
                            <img src="{{asset('uploads/setting/'.$setting->favicon)}}" alt="" width="80" height="80px">
                            <input type="file" class="form-control @error('favicon') is-invalid @enderror" name="favicon" />
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            @error('favicon')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="Twitter" class="form-label">Banner</label>
                        <div class="input-group mb-3">
                            <img src="{{asset('uploads/setting/'.$setting->banner)}}" alt="" width="80" height="80px">
                            <input type="file" class="form-control @error('favicon') is-invalid @enderror" name="banner" />
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            @error('banner')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control @error('description') is-invalid @enderror" aria-label=" With textarea" name="description">{{ $setting->description }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div>

</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#yourFormId').on('submit', function(e) {
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
                    alert('product added successfully');
                    console.log(response);
                },
                error: function(xhr) {
                    alert('somthing went wrong');
                    console.log(xhr.responseText);
                }

            });

        });
    });
</script>