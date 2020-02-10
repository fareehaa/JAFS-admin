@extends('admin.app')
@section('main-content')
<br>
{{-- <div class="col-lg-offset-3 col-lg-6"> --}}
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Employee Type/Category</h3>
        </div>
        @include('includes.error')
    <form class="form-horizontal" action="{{route('emptype.store')}}"  method="POST">
        {{csrf_field()}}
        <div class="box-body">
            <div class="col-lg-6">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Designation</label>
        
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  
                 
                  {{-- <div class="form-group">
                    <label  class="col-sm-2 control-label">Age</label>
        
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div> --}}
             
              
              <div class="box-footer">
                <a href="{{route('emptype.index')}} " class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
            </div>
           
         
      </form>
</div>
{{-- </div> --}}

@endsection