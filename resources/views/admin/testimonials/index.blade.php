@extends('adminlayouts.app')
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('title', 'All Testimonials')
@section('location', 'All Testimonials')

@section('admin_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
              <div class="card-header">
              <a href="{{route('Testimonials.create')}}" class="btn btn-info float-right">ADD</a>
                <h3 class="card-title">Testimonials Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($testimonials as $key=>$testimonial)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$testimonial->name}}</td>
                      <td>{{$testimonial->positon}}</td>
                      <td>{{$testimonial->details}}</td>
                      <td><img src="{{asset('uploads/testimonial/'.$testimonial->image)}}" alt="" style="height: 80px; width:80px;"></td>
                      <td>
                        <a href="{{route('Testimonials.edit',$testimonial->id)}}" class="btn btn-info">Edit</a>

                        <form action="{{route('Testimonials.destroy',$testimonial->id)}}" method="POST" id="delete{{$testimonial->id}}">
                          @csrf
                          @method('DELETE')
                        </form>
                        <button type="submit" class="btn btn-danger" onclick="if(confirm('Are You sure To delete This?')){
                          event.preventDefault();
                          document.getElementById('delete{{$testimonial->id}}').submit();

                        }">Delete</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Sl</th>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Details</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend')}}/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush