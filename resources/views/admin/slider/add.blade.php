@extends('admin.app')
@section('main-content')
<br>
{{-- <div class="col-lg-offset-3 col-lg-6"> --}}
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Slider</h3>
        </div>
    <form class="form-horizontal" action="{{route('slider.store')}} " method="POST" enctype="multipart/form-data">
       {{csrf_field()}}
        <div class="box-body">
          @include('includes.error')
            <div class="col-lg-6">
              
                {{-- <div class="form-group">
                    <label  class="col-sm-2 control-label">Name</label>
        
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div> --}}
                  
         
      {{--       <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image-0</label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" id="">
                </div>
              </div> --}}
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload 
                    Image-1
                </label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" name="file">
                </div>
              </div>
             {{--  <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image-2</label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image-3</label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image-4</label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image-5</label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" id="">
                </div>
              </div> --}}
          
            
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{route('employee.index')}} " class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-info pull-right">Upload</button>
            </div>
            <!-- /.box-footer -->
        
      </form>
</div>
{{-- </div> --}}

@endsection