@extends('admin.app')
@section('main-content')
    <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   Welcome 
    <small >it all starts here</small>
  </h1>
  <div class="col-lg-offset-5 col-lg-3">
  <a href="{{route('project.create')}}" class="btn btn-info">Add projects</a>
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
      <h3 class="box-title">projects</h3>

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
            <th>Project Code</th>
            <th>Company Name</th>
            <th>LOGO</th>
            <th>Description</th>
            <th>Location</th>
            <th>Image-1</th>
            <th>Image-2</th>
            <th>Image-3</th>
            <th>Image-4</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
          @if(count($projects)>0)
          @foreach($projects as $project)
          <tr>
            <td>{{$loop->index + 1 }} </td>
            <td>{{$project->projectcode}} </td>
              <td>{{$project->companyname}} </td>
              <td> <img src="{{asset('storage/upload/project/'.$project->logo)}} " style="height:75px; width:75px;" alt=""></td>
              <td>{{$project->description}} </td>
              <td>{{$project->location}} </td>
              <td> <img src="{{asset('storage/upload/project/'.$project->imageone)}} " style="height:100px; width:100px;" alt=""> </td>
              <td><img src="{{asset('storage/upload/project/'.$project->imagetwo)}} " style="height:100px; width:100px;" alt=""></td>
              <td><img src="{{asset('storage/upload/project/'.$project->imagethree)}} " style="height:100px; width:100px;" alt=""> </td>
              <td><img src="{{asset('storage/upload/project/'.$project->imagefour)}} " style="height:100px; width:100px;" alt=""> </td>
              <td>{{$project->status}} </td>
             
              
          <td><a href="{{route('project.edit',$project->id)}}"><i class="fa fa-edit"></i></a></td>
              <td>
                <form action="{{route('project.destroy',$project->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
          <input type="hidden" name="id" value="{{$project->id}}">
          <button type="submit" onclick="return confirm('are u sure');" class="btn btn-danger"><i class="fa fa-trash"></i></button>
          </form>
          </td>
          </tr>
            @endforeach
            @else
            <tr>
                <td>No DATA FOUND!..</td>
            </tr>
          @endif
         
          </tbody>
          <tfoot>
         
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