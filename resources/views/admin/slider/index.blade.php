@extends('adminlayouts.app')
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('title', 'All Slider')
@section('location', 'All Slider')

@section('admin_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
              <div class="card-header">
              <a href="{{route('Slider.create')}}" class="btn btn-info float-right">ADD</a>
                <h3 class="card-title">Slider Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Title</th>
                    <th>Point-1</th>
                    <th>Point-2</th>
                    <th>Point-3</th>
                    <th>Details</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($sliders as $key=>$slider)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td><img src="{{asset('uploads/slider/'.$slider->image)}}" alt="" style="height: 60px; width:180px;"></td>
                      <td>{{$slider->name}}</td>
                      <td>{{$slider->price}}</td>
                      <td>{{$slider->title}}</td>
                      <td>{{$slider->point1}}</td>
                      <td>{{$slider->point2}}</td>
                      <td>{{$slider->point3}}</td>
                      <td>{{$slider->details}}</td>
                      <td>
                        <a href="{{route('Slider.edit',$slider->id)}}" class="btn btn-info">Edit</a>

                        <form action="{{route('Slider.destroy',$slider->id)}}" method="POST" id="delete{{$slider->id}}">
                          @csrf
                          @method('DELETE')
                        </form>
                        <button type="submit" class="btn btn-danger" onclick="if(confirm('Are You sure To delete This?')){
                          event.preventDefault();
                          document.getElementById('delete{{$slider->id}}').submit();

                        }">Delete</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Sl</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Title</th>
                      <th>Point-1</th>
                      <th>Point-2</th>
                      <th>Point-3</th>
                      <th>Details</th>
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