@extends('adminlayouts.app')

@section('title', ' TopContent Create')
@section('location', ' TopContent Create')


@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Top content create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Topcontent.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact Number">
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
                    <input type="text" class="form-control" name="open_day" id="OpenDay" placeholder="Open Day - Close Day">
                  </div>
                  <div class="form-group">
                    <label for="OpenHour">Open Hour and Close Hour</label>
                    <input type="text" class="form-control" name="open_hour" id="OpenHour" placeholder="Open Hour - Close Hour">
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