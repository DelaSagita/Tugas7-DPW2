<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fa fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="{{ url('logout') }}" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">

            <div class="media-body">
              <h3 class="dropdown-item-title">
                <i class="fa fa-user"></i>
                  log out
              </h3>
            </div>
          </div>
          <!-- Message End -->
        </a>

      
      </div>
    </li>
  </ul>
</nav>