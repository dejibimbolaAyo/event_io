<header class="main-header">
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
              </li>
            </ul>
          </li>
          <li class="footer"><a href="#">See All Messages</a></li>
        </ul>
      </li>
      <!-- Notifications: style can be found in dropdown.less -->
      <!-- Tasks: style can be found in dropdown.less -->
      <!-- User Account: style can be found in dropdown.less -->
      <!-- Control Sidebar Toggle Button -->
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</nav>
</header>
{{-- the side bar --}}
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <!-- search form -->
    <img src="{{URL::asset('assets/img/logo.png')}}" class="logo" style="position: relative; top: 30px;>
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
    <li class="active">
      <a href="pages/widgets.html">
        <i class="fa fa-th"></i> <span>Dashboard</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li>
      <a href="pages/widgets.html">
        <i class="fa fa-th"></i> <span>Events</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li>
      <a href="pages/widgets.html">
        <i class="fa fa-th"></i> <span>Create Event</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-green">new</small>
        </span>
      </a>
    </li>
    <li>
      <a href="pages/widgets.html">
        <i class="fa fa-th"></i> <span>Account</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>