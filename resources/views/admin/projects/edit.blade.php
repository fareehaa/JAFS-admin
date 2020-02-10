@extends('admin.app')
@section('main-content')
<br>
{{-- <div class="col-lg-offset-3 col-lg-6"> --}}
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Project Detail</h3>
        </div>
        @include('includes.error')
    <form action="{{route('project.update',$project->id)}} " method="POST" enctype="multipart/form-data" class="form-horizontal">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="box-body">
            <div class="col-lg-6">
              <div class="form-group">
                <label  class="col-sm-2 control-label">Project Code</label>
    
                <div class="col-sm-10">
                  <input type="text" name="projectcode" value="{{$project->projectcode}}" class="form-control">
                </div>
              </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Company Name</label>
        
                    <div class="col-sm-10">
                      <input type="text" name="companyname"  value="{{$project->companyname}}" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Upload logo</label>
                    <div class="col-sm-10">
                    <input type="file"  name="logo" value="{{$project->logo}}" class="form-control" id="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Project Description</label>
                    <div class="col-sm-10">
                    <textarea name="description" value="{{$project->description}}" class="form-control" rows="3">{{$project->description}} </textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Location</label>
      
                  <div class="col-sm-10">
                    <input type="text" name="location" value="{{$project->location}}" class="form-control">
                  </div>
                </div>
             </div>
             <div class="col-lg-6">
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image -1</label>
                <div class="col-sm-10">
                <input type="file"  name="imageone" value="{{$project->imageone}}" class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload 
                    Image-2
                </label>
                <div class="col-sm-10">
                <input type="file"  name="imagetwo" value="{{$project->imagetwo}}" class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image-3</label>
                <div class="col-sm-10">
                <input type="file"  name="imagethree" value="{{$project->imagethree}}" class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image-4</label>
                <div class="col-sm-10">
                <input type="file"  name="imagefour" value="{{$project->imagefour}}" class="form-control" id="">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="1" name="status" @if($project->status==1) checked @endif > project completed
                    </label>
                  </div>
                </div>

             </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{route('project.index')}} " class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-info pull-right">save</button>
            </div>
            <!-- /.box-footer -->
        
      </form>
</div>
{{-- </div> --}}

@endsection