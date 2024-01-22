@extends('adminlayouts.app')

@section('title', ' item Edit')
@section('location', ' item Edit')


@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">item Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Item.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$item->name}}">
                  </div>
                  <div class="form-group">
                    <label for="details">Details</label>
                    <input type="text" class="form-control" name="details" id="details" value="{{$item->details}}">
                  </div>
                  <div class="form-group">
                    <label for="price">price</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{$item->price}}">
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
                    <img src="{{asset('uploads/item/'.$item->image)}}" alt="" style="height: 80px; width:80px;">
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