<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li>
          <a href="{{route('employee.index')}} ">
            <i class="fa fa-files-o"></i>
            <span>Employees</span>
            <small class="label pull-right bg-green">ALL</small>
          </a>
          
        </li>
      <li>
      <a href="{{route('emptype.index')}}"><i class="fa fa-circle-o text-aqua"></i> <span>Employee Category</span></a></li>
      <li>
        <li><a href="{{route('project.index')}} "><i class="fa fa-circle-o text-aqua"></i> <span>project</span></a></li>
      <li>
      <li><a href="{{route('slider.index')}} "><i class="fa fa-circle-o text-aqua"></i> <span>Slider</span></a></li>
      <li>
          <a href="">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right bg-red">3</small>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>
        <li><a href=""><i class="fa fa-book"></i> <span>Career</span></a></li>
        <li><a href=""><i class="fa fa-book"></i> <span>Invoice</span></a></li>
        <li><a href=""><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  