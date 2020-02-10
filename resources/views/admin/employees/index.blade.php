@extends('admin.app')
@section('main-content')
    <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   Welcome 
    <small >it all starts here</small>
  </h1>
  <div class="col-lg-offset-5 col-lg-3">
  <a href="{{route('employee.create')}}" class="btn btn-info">Add Employees</a>
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
      <h3 class="box-title">Employees</h3>

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
            <th>Name</th>
            <th>Phone no</th>
            <th>email</th>
            <th>Image</th>
            <th>Adhar Card</th>
            <th>Address Prof</th>
            <th>Code</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
          @if(count($emps)>0)
          @foreach($emps as $emp)
          <tr>
            <td>{{$loop->index + 1 }} </td>
              <td>{{$emp->name}} </td>
              <td>{{$emp->phone}} </td>
              <td>{{$emp->email}} </td>
              <td> <img src="{{asset('storage/upload/employee/'.$emp->image)}} " style="height:150px; width:150px;" alt=""> </td>
              
              <td>  <img src="{{asset('storage/upload/employee/'.$emp->adhar)}} " style="height:150px; width:150px;" alt=""></td>
              <td><img src="{{asset('storage/upload/employee/'.$emp->address)}} " style="height:150px; width:150px;" alt=""> </td>
              <td>{{$emp->code}} </td>
              <td>category</td>
              
          <td><a href="{{route('employee.edit',$emp->id)}}"><i class="fa fa-edit"></i></a></td>
              <td>
                <form action="{{route('employee.destroy',$emp->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                  <input type="hidden" name="id" value="{{$emp->id}}">
                <button type="submit" onclick="return confirm('are u sure');" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form></td>
            </tr>
            @endforeach
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