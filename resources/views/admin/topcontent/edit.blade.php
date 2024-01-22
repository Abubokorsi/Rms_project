@extends('adminlayouts.app')


@section('title', ' TopContent Edit')
@section('location', ' TopContent Edit')

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
              <form action="{{route('Topcontent.update',$topcontent->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{$topcontent->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="language">Language</label>
                    <select class="form-control" name="language" id="language">
                          <option>Select One</option>
                          <option value="Bangla">Bangla</option>
                          <option value="English">English</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="OpenDay">Open Day and Close Day</label>
                    <input type="text" class="form-control" name="open_day" id="OpenDay" value="{{$topcontent->open_day}}">
                  </div>
                  <div class="form-group">
                    <label for="OpenHour">Open Hour and Close Hour</label>
                    <input type="text" class="form-control" name="open_hour" id="OpenHour" value="{{$topcontent->open_hour}}">
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