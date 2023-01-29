<?php
    // The user has a role or not
    if(!Authenthication::whoCanAccess('user'))
    {
      header('Location: /login');
      exit;
    }
  

    require dirname(__DIR__) . '/parts/header.php';
?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="/home">Essay Blog</a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>
      <!-- Left links -->

      <!-- Right links -->
      <?php if ( Authenthication::isLoggedIn() ) : ?>
        <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <!-- <a class="nav-link" href="/dashboard">
            <div>
              <i class="fas fa-bell fa-lg mb-1"></i>
            </div>
          Dashboard
          </a> -->
        <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dashboard</button>
        <div id="myDropdown" class="dropdown-content">
        <a href="/manage-posts">Manage Posts</a>
        <!-- manage users start -->
        <?php if ( Authenthication::whoCanAccess('admin') ) : ?>
        <a href="manage-users">Manage Users</a>
        <?php endif; ?>
      </div>
      </div>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="/logout">
            <div>
              <i class="fas fa-globe-americas fa-lg mb-1"></i>
            </div>
          Logout
          </a>
        </li>
      </ul>
        <?php else : ?>
      <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="/login">
            <div>
              <i class="fas fa-bell fa-lg mb-1"></i>
            </div>
           Login
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="/signup">
            <div>
              <i class="fas fa-globe-americas fa-lg mb-1"></i>
            </div>
           Sign Up
          </a>
        </li>
      </ul>
      <?php endif; ?>
      <!-- Right links -->
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<?php
require dirname(__DIR__) . '/parts/footer.php';
