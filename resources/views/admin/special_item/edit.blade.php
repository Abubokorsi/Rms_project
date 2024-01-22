@extends('adminlayouts.app')

@section('title', ' special_item Edit')
@section('location', ' special_item Edit')


@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">special_item Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Special_item.update',$special_item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$special_item->title}}">
                  </div>
                  <div class="form-group">
                    <label for="sub_title">sub_title</label>
                    <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{$special_item->sub_title}}">
                  </div>
                  <div class="form-group">
                    <label for="details">details</label>
                    <input type="text" class="form-control" name="details" id="details" value="{{$special_item->details}}">
                  </div>
                  <div class="form-group">
                    <label for="categoryImage">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="categoryImage">
                        <label class="custom-file-label" for="bannerImage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <img src="{{asset('uploads/special_item/'.$special_item->image)}}" alt="" style="height: 80px; width:80px;">
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