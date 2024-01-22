@extends('adminlayouts.app')

@section('title', 'Testimonial Create')
@section('location', 'Testimonial Create')

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Testimonial create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Testimonials.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder=" Name">
                  </div>
                  <div class="form-group">
                    <label for="postion"> postion</label>
                    <input type="text" class="form-control" name="postion" id="postion" placeholder=" Postion">
                  </div>
                  <div class="form-group">
                    <label for="details"> details</label>
                    <input type="text" class="form-control" name="details" id="details" placeholder=" details">
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
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
</div>
@endsection