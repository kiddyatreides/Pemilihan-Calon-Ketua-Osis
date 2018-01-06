<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>MP</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SPK</b>SMPN 29 JKT</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"> {{ \Illuminate\Support\Facades\Session::get('name') }}
            </span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <p>
               {{ \Illuminate\Support\Facades\Session::get('name') }} - KALEYA
             </p>
               <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
           </li>
           <!-- Menu Body -->

           <!-- /.row -->
         </li>
         <!-- Menu Footer-->
         <li class="user-footer">
          <small>KALEYA - Kalender Budaya</small>
        </li>
      </ul>
    </ul>
  </li>
  <!-- Control Sidebar Toggle Button -->
</ul>
</div>
</nav>
</header>