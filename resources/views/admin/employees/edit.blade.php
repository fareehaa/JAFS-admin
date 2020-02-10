@extends('admin.app')
@section('main-content')
<br>

{{-- <div class="col-lg-offset-3 col-lg-6"> --}}
    <div class="box box-info">
      <div class="col-lg-6">
        @include('includes.error')
      
      </div>
        <div class="box-header with-border">
          <h3 class="box-title">Employee Detail</h3>
        </div>
        
    <form class="form-horizontal" action="{{route('employee.update',$emp->id)}}" method="POST">
      {{csrf_field()}}
      {{method_field('PUT')}}       
       
      <div class="box-body">

            <div class="col-lg-6">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Name</label>
        
                    <div class="col-sm-10">
                      <input type="text" name="name" value="{{$emp->name}}" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Phone</label>
        
                    <div class="col-sm-10">
                      <input type="text" name="phone" value="{{$emp->phone}}" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Employee Code</label>
        
                    <div class="col-sm-10">
                      <input type="text" name="code" value="{{$emp->code}}" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Age</label>
        
                    <div class="col-sm-10">
                      <input type="text" name="age" value="{{$emp->age}}" class="form-control">
                    </div>
                  </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    
                <div class="col-sm-10">
                  <input type="email" name="email" value="{{$emp->email}}" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    
                <div class="col-sm-10">
                  <input type="text" name="password" value="{{$emp->password}}" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
              </div>
            </div> 
           {{--  <div class="col-lg-6">
                <img src="{{asset('storage/upload/employee/'.$emp->image)}}" style="width:100px;height:100px;" alt="">
            </div> --}}
         <div class="col-lg-6">
            <div class="form-group">
            <label  class="col-sm-2 control-label">Upload Image</label>
                <div class="col-sm-10">
                <input type="file" name="image" value="{{$emp->image}}" class="form-control" id="">
                </div>
              </div>
              {{-- <div class="col-lg-6">
                  <img src="{{asset('storage/upload/employee/'.$emp->adhar)}} " style="width:100px;height:100px;" alt="">
                </div><br> --}}
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Adhar</label>
                <div class="col-sm-10">
                <input type="file"  name="adhar" value="{{$emp->adhar}}" class="form-control" id="">
                </div>
              </div>
               {{--  <div class="col-lg-6">
                  <img src="{{asset('storage/upload/employee/'.$emp->address)}} " style="width:100px;height:100px;" alt="">
                </div>  --}}
              <div class="form-group">
                <label  class="col-sm-2 control-label">Upload Address</label>
                <div class="col-sm-10">
                <input type="file" name="address"  value="{{$emp->address}}" class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Textarea</label>
                <div class="col-sm-10">
                <textarea name="adr" value="{{$emp->adr}}" class="form-control" rows="3"> {{$emp->adr}}</textarea>
              </div>
            </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      
                      <input type="checkbox" name="status" @if($emp->status==1) checked @endif > Remember me
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{route('employee.index')}} " class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
            <!-- /.box-footer -->
         </div>
      </form>
</div>
{{-- </div> --}}

@endsection