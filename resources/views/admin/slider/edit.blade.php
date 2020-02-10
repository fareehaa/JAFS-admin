@extends('admin.app')
@section('main-content')
<br>
{{-- <div class="col-lg-offset-3 col-lg-6"> --}}
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Slider</h3>
        </div>
    <form class="form-horizontal" action="{{route('slider.update',$img->id)}} " method="POST" enctype="multipart/form-data">
       {{csrf_field()}}
       {{method_field('PUT')}}
        <div class="box-body">
        <div class="col-lg-6">
        <div class="form-group">
        <label  class="col-sm-2 control-label">Name Image</label>
        <div class="col-sm-10">
        <div>{{$img->name}}</div>
        </div>
         </div>
       <div class="form-group">
                <label  class="col-sm-2 control-label">Upload 
                    Image
                </label>
                <div class="col-sm-10">
                <input type="file" value="{{$img->name}}" class="form-control" name="file">
                </div>
        </div>
            
            <div class="box-footer">
              <a href="{{route('employee.index')}} " class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-info pull-right">Upload</button>
            </div>
            <!-- /.box-footer -->
        
      </form>
</div>
{{-- </div> --}}

@endsection