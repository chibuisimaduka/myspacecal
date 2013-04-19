<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
      {{ Asset::container('admin')->styles();}}
      


  <!-- Title: -->
  <title>Genius Unlocker Admin</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

</head>

<body class="sidebar-max">

<!--============================= Page Body =================================-->

<!-- #topbar: Top Bar Menu -->
<ul id="topbar" class="on-click">
  <li class="pull-left">
    <h1 id="topbar-title">
      <i class="icon-cogs"></i>
      <!-- <i class="icon-icomoon-grid-view"></i> -->
      <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
      <a href="index.html">Genius Unlocker Control Panel</a>
    </h1>
  </li>
  <li>
    <a href="theme-docs.html">
      <i class="icon-book"></i>
      <!-- <i class="icon-icomoon-grid-view"></i> -->
      <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
      <span>Theme Docs</span>
    </a>
  </li>
  <li class="parent pull-right">
    <a href="#" data-toggle="dropdown">
      <i class="icon-user"></i>
      <span>John Adminsky</span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">Profile</a></li>
      <li><a href="#">Finances</a></li>
      <li class="divider"></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </li>
  <li class="parent pull-right">
    <a href="#" data-toggle="dropdown">
      <i class="icon-cog"></i>
      <span>Settings</span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">Backend Settings</a></li>
      <li><a href="#">Frontend Settings</a></li>
    </ul>
  </li>
  <li class="pull-right">
    <a href="page-login.html">
      <i class="icon-sign-blank"></i>
      <span>Sign in</span>
    </a>
  </li>
</ul>
<!-- /#topbar: Top Bar Menu -->


<div class="container-fluid" id="container">

    <!-- #sidebar: Sidebar -->
    <div id="sidebar">

      <div class="search-mini-wrapper">
        <form action="#" class="search-mini">
          <input name="search" type="text" placeholder="Search..." />
          <button type="submit">
            <i class="icon-search"></i>
          </button>
        </form>
      </div>      

      <!-- ul.sidebar-menu: Sidebar Menu -->
      <ul class="sidebar-menu on-click" id="main-menu">
        <li class="active">
          <div class="sidebar-menu-item-wrapper">
            <a href="#" data-target-page="page-dashboard">
              <i class="icon-home"></i>
              <!-- <i class="icon-icomoon-grid-view"></i> -->
              <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
              <span>Dashboard</span>
            </a>
          </div>
        </li>
        <li class="inactive">
          <div class="sidebar-menu-item-wrapper">
            <a href="#" data-target-page="page-stats-and-reports">
              <i class="icon-bar-chart"></i>
              <span>Stats &amp; Reports</span>
            </a>
          </div>
        </li>
        <li class="parent inactive">
          <div class="sidebar-menu-item-wrapper">
            <a href="#">
              <i class="icon-hdd"></i>
              <!-- <i class="icon-icomoon-grid-view"></i> -->
              <span>Database</span>
            </a>
            <ul>
              <li><a href="#" data-target-page="page-database-settings"><i class="icon-cog"></i> <span>Settings</span></a></li>
              <li><a href="#" data-target-page="page-database-table1"><i class="icon-table"></i> <span>Table 1</span></a></li>
              <li class="parent inactive">
                <a href="#"><i class="icon-icomoon-grid-view"></i> <span>Sub Menu</span></a>
                <ul>
                  <li class="parent inactive">
                    <a href="#"><i class="icon-cog"></i> <span>More Settings</span></a>
                    <ul>
                      <li><a href="#" data-target-page="page-sample"><span>Alpha</span></a></li>
                      <li><a href="#" data-target-page="page-sample"><span>Beta</span></a></li>
                      <li><a href="#" data-target-page="page-sample"><span>Theta</span></a></li>
                    </ul>
                  </li>
                  <li><a href="#" data-target-page="page-database-table1"><i class="icon-table"></i> <span>Table 2</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
        <li class="inactive">
          <div class="sidebar-menu-item-wrapper">
            <a href="#" data-target-page="page-sample">
              <i class="icon-dashboard"></i>
              <span>Virtual Machines</span>
            </a>
          </div>
        </li>
        <li class="parent inactive">
          <div class="sidebar-menu-item-wrapper">
            <a href="#">
              <i class="icon-group"></i>
              <span>Users</span>
            </a>
            <ul>
              <li><a href="#" data-target-page="page-sample">User Accounts</a></li>
              <li><a href="#" data-target-page="page-sample">User settings</a></li>
              <li><a href="#" data-target-page="page-sample">Special user settings</a></li>
            </ul>
          </div>
        </li>
      </ul>
      <!-- /ul.sidebar-menu: Sidebar Menu -->


      <a href="#" id="sidebar-resizer">
        <i class="min icon-resize-small"></i>
        <i class="max icon-resize-full"></i>
      </a>

    </div>
    <!-- /#sidebar: Sidebar -->

    <!-- #content: The Main Content Section

      Just add the page content here for a regular page or use .page DIVs for panel pages.
      Use Bootstrap fluid layout for best effect.

    -->
    <div id="content">

        @yield('content')
    </div>
    <!-- /#content: The Main Content Section -->

</div><!-- /.container-fluid#container -->



<!--============================= /Page Body ================================-->

<!-- Javascript: placed at the end of the document to speed up page loading
     (generally gives more consistent behavior than 'defer') -->
{{ Asset::container('admin')->scripts();}}

</body>
</html>