@extends('admin.app')
@section('main-content')
<br>
{{-- <div class="col-lg-offset-3 col-lg-6"> --}}
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Employee Detail</h3>
        </div>
    <form class="form-horizontal">
        <div class="box-body">
            <div class="col-lg-6">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Name</label>
        
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Phone</label>
        
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Employee Code</label>
        
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Age</label>
        
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
              </div>
            </div>
         <div class="col-lg-6">
            <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Image</label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Adhar</label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Address</label>
                <div class="col-sm-10">
                <input type="file"  class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Textarea</label>
                <div class="col-sm-10">
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{route('employee.index')}} " class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-info pull-right">Sign in</button>
            </div>
            <!-- /.box-footer -->
         </div>
      </form>
</div>
{{-- </div> --}}

@endsection