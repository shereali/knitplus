<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{ url('admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="">
          <a href="{{ route('admin.index') }}">
            <i class="fa fa-cog text-aqua"></i> <span>Home Page &  Slider Setting</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>

        <li class="">
          <a href="{{ route('division.index') }}">
            <i class="fa fa-plus text-aqua"></i> <span>All Division Page Setting</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>        
        <li class="">
          <a href="{{ route('product.index') }}">
            <i class="fa fa-plus text-aqua"></i> <span>Product Page Setting</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>        
        {{-- <li class="">
          <a href="{{ route('division.index') }}">
            <i class="fa fa-circle-o text-aqua"></i> <span>All Division</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>   --}}      
        {{-- <li class="">
          <a href="#">
            <i class="fa fa-circle-o text-aqua"></i> <span>All Printing</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>    --}}     
        {{-- <li class="">
          <a href="#">
            <i class="fa fa-send text-aqua"></i> <span>Post</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>     --}}    
        <li class="">
          <a href="{{ url('register') }}">
            <i class="fa fa-user text-aqua"></i> <span>Create User</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li> 
        <li class="">
          <a href="{{ url('admin/users') }}">
            <i class="fa fa-users text-aqua"></i> <span>Users</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
           
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>