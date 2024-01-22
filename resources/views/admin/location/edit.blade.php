@extends('adminlayouts.app')


@section('title', ' Location Edit')
@section('location', ' Location Edit')

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Top content Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Location.update',$location->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="map_link">map link </label>
                    <input type="text" class="form-control" name="map_link" id="map_link" value="{{$location->map_link}}">
                  </div>
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" id="location" value="{{$location->location}}">
                  </div>
                  <div class="form-group">
                    <label for="OpenHour">map link and Close Hour</label>
                    <input type="text" class="form-control" name="open_hour" id="OpenHour" value="{{$location->open_hour}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{$location->email}}">
                  </div>
                  <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{$location->phone}}">
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