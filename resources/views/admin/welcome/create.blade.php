@extends('adminlayouts.app')

@section('title', ' Welcome Edit')
@section('location', ' Welcome Edit')


@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Welcome create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Welcome.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="subTitle">Sub Title</label>
                    <input type="text" class="form-control" name="sub_title" id="subTitle" placeholder="Sub Title">
                  </div>
                  <div class="form-group">
                    <label for="point1">point 1</label>
                    <input type="text" class="form-control" name="point1" id="point1" placeholder="point-1">
                  </div>
                  <div class="form-group">
                    <label for="point2">point 2</label>
                    <input type="text" class="form-control" name="point2" id="point2" placeholder="point-2">
                  </div>
                  <div class="form-group">
                    <label for="point3">point 3</label>
                    <input type="text" class="form-control" name="point3" id="point3" placeholder="point-3">
                  </div>
                  <div class="form-group">
                    <label for="details">Details</label>
                    <input type="text" class="form-control" name="details" id="details" placeholder="details">
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