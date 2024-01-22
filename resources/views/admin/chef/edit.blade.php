@extends('adminlayouts.app')

@section('title', ' Chef Edit')
@section('location', ' Chef Edit')


@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Chef Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Chef.update',$chef->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$chef->name}}">
                  </div>
                  <div class="form-group">
                    <label for="postion">Postion</label>
                    <input type="text" class="form-control" name="postion" id="postion" value="{{$chef->postion}}">
                  </div>
                  <div class="form-group">
                    <label for="twitter"> twitter</label>
                    <input type="text" class="form-control" name="twitter" id="twitter" value="{{$chef->twitter}}">
                  </div>
                  <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="facebook" value="{{$chef->facebook}}">
                  </div>
                  <div class="form-group">
                    <label for="instagram">instagram</label>
                    <input type="text" class="form-control" name="instagram" id="instagram" value="{{$chef->instagram}}">
                  </div>
                  <div class="form-group">
                    <label for="linkind">linkind</label>
                    <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$chef->linkedin}}">
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
                  <img src="{{asset('uploads/chef/'.$chef->image)}}" alt="" style="height: 80px; width:80px;">
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