@extends('adminlayouts.app')

@section('title', ' Special_item Edit')
@section('location', ' Special_item Edit')


@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Special_item create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Special_item.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <select name="category" class="form-control">
                      @foreach($special_categories as $special_category)
                      <option value="{{$special_category->id}}">{{$special_category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="title">
                  </div>
                  <div class="form-group">
                    <label for="sub_title">sub_title</label>
                    <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="sub_title">
                  </div>
                  <div class="form-group">
                    <label for="details">details</label>
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