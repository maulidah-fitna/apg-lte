    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>APS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg brandlogo-image"><img src="dist/img/logo11.png"></img></span>
      <span class="logo-lg"><b>APPASI</b></img></span>
      <a href="#" class="brand-link logo-switch">

    </a>

    </a>

    <!-- Header Navbar -->
    

    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
      <a href="logout.php" class="btn  btn-primary" onclick="logout()" >Keluar</a>
      <script>
        function logout() {
          if (confirm("Keluar Sekarang?")) {
            signOut(); // Pastikan fungsi signOut() didefinisikan di tempat lain
          }
  }

        function signOut() {
          // Implementasi logout di sini, misalnya:
          window.location.href = "logout.php"; // Redirect ke logout.php untuk mengakhiri sesi
  }
</script>
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <ul class="dropdown-menu">
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                      </h4>
                    </a>
                  </li>
                </ul>
                <!-- /.menu -->
              </li>
            </ul>
          </li>
            </a>
            <ul class="dropdown-menu">
              <li>
                <ul class="menu">
                  <li><!-- start notification -->
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <ul class="dropdown-menu">
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
            </a>
            <ul class="dropdown-menu">
              </li>
              <!-- Menu Body -->
              <li class="user-body">
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
          </li>
        </ul>
      </div>
    </nav>
  