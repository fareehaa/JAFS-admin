@extends('admin.app')
@section('main-content')
    <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   Welcome 
    <small >it all starts here</small>
  </h1>
  <div class="col-lg-offset-5 col-lg-3">
  <a href="{{route('emptype.create')}}" class="btn btn-info">Add Employee types</a>
  </div>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<br><br>
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">emptypes</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Sr.No</th>
            <th>Designation</th>
           <th>Edit</th>
           <th>Delet</th>
          </tr>
          </thead>
          <tbody>
              
          @if(count($empt)>0)
          @foreach($empt as $emp)
          <tr>
            <td>{{$loop->index + 1 }} </td>
          <td>{{$emp->name}}</td> 
          <td> <a href="{{route('emptype.edit',$emp->id) }}"> <i class="fa fa-edit"></i></a> </td>
          <td> 
            <form action="{{route('emptype.destroy',$emp->id)}} " method="POST" >
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <input type="hidden" name="id" value="{{$emp->id}} ">
          <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure,delete this');"><i class="fa fa-trash-o"></i></button>
            
            </form>
         </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td>No record found!.</td>
            </tr>
          @endif
         
          </tbody>
          <tfoot>
          {{-- <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr> --}}
          </tfoot>
        </table>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
@endsection