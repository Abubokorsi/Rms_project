@extends('adminlayouts.app')

@section('title', 'Banner Create')
@section('location', 'Banner Create')

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Banner create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Banner.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="bannerTitle">Title</label>
                    <input type="text" class="form-control" name="title" id="bannerTitle" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="bannerSubTitle">Sub Title</label>
                    <input type="text" class="form-control" name="sub_title" id="bannerSubTitle" placeholder="Sub Title">
                  </div>
                  <div class="form-group">
                    <label for="bannerVideo">youtube Video link</label>
                    <input type="text" class="form-control" name="video" id="bannerVideo" placeholder="youtube video link">
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