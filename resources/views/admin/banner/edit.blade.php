@extends('adminlayouts.app')

@section('title', 'Banner Edit')
@section('location', 'Banner Edit')

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
              <form action="{{route('Banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="bannerTitle">Title</label>
                    <input type="text" class="form-control" name="title" id="bannerTitle" value="{{$banner->title}}">
                  </div>
                  <div class="form-group">
                    <label for="bannerSubTitle">Sub Title</label>
                    <input type="text" class="form-control" name="sub_title" id="bannerSubTitle" value="{{$banner->sub_title}}">
                  </div>
                  <div class="form-group">
                    <label for="bannerVideo">youtube Video link</label>
                    <input type="text" class="form-control" name="video" id="bannerVideo" value="{{$banner->video}}">
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
                    <img src="{{asset('uploads/banner/'.$banner->image)}}" alt="" style="height: 70px; width:180px;">
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