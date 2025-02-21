<aside class="main-sidebar">   
   <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style='height: auto;'>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="?hal=dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="?hal=data-absen"><i class="fa fa-user"></i> <span>Absensi</span></a></li>
        <li><a href="?hal=data-rekap"><i class="fa fa-chart-bar"></i> <span>Data Rekap</span></a></li>
        
        <li class="treeview menu-open" style="height: auto;">
          <a href="#">
            <i class="fa fa-table"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: block;">
            <li><a href="?hal=data-siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="?hal=data-user"><i class="fa fa-circle-o"></i> Data User</a></li>
          </ul>
        </li>
        <li class="treeview">
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    </aside>