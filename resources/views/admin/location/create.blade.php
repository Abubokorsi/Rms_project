@extends('adminlayouts.app')

@section('title', ' Location Create')
@section('location', ' Location Create')


@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Location create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Location.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="map_link">map link </label>
                    <input type="text" class="form-control" name="map_link" id="map_link" placeholder="map link ">
                  </div>
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="location">
                  </div>
                  <div class="form-group">
                    <label for="OpenHour">open Hour and Close Hour</label>
                    <input type="text" class="form-control" name="open_hour" id="OpenHour" placeholder="Open Hour - Close Hour">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact Number">
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