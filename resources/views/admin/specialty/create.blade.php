@extends('adminlayouts.app')


@section('title', 'Specialty Create')
@section('location', 'Specialty Create')

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Specialty create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Specialty.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="main_title">Main Title</label>
                    <input type="text" class="form-control" name="main_title" id="main_title" placeholder="Main Title">
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="details">Details</label>
                    <input type="text" class="form-control" name="details" id="details" placeholder="Details">
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