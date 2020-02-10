@include('admin.layouts.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('admin.layouts.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar')
  <div class="content-wrapper">

    @section('main-content')
    @show
    <br><br>
  </div>
  <!-- /.content-wrapper -->
{{-- @include('admin.layouts.foot') --}}
  
@include('admin.layouts.footer')
</body>
</html>
