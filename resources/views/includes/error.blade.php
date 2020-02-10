<div class="col-lg-offset-3 col-lg-6">
    @if(count($errors)>0)
    @foreach ($errors->all() as $msg)
    <p class="alert alert-danger"> {{$msg}}</p>
    @endforeach
    @endif
</div>