@extends('adminlayouts.app')

@section('title', 'Testimonials Edit')
@section('location', 'Testimonials Edit')

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Testimonials Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Testimonials.update',$testimonial->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$testimonial->name}}">
                  </div>
                  <div class="form-group">
                    <label for="postion"> postion</label>
                    <input type="text" class="form-control" name="postion" id="postion" value="{{$testimonial->postion}}">
                  </div>
                  <div class="form-group">
                    <label for="details"> details</label>
                    <input type="text" class="form-control" name="details" id="details" value="{{$testimonial->details}}">
                  </div>
                  <div class="form-group">
                    <label for="bannerImage">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="bannerImage">
                        <label class="custom-file-label" for="bannerImage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <img src="{{asset('uploads/testimonial/'.$testimonial->image)}}" alt="" style="height: 80px; width:80px;">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
</div>
@endsection