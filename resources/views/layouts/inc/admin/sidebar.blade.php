<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">
          <i class="mdi mdi-buffer menu-icon"></i>
          <span class="menu-title">Newsletter</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="categories">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category')}}"> View Newsletter </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create')}}"> Create Newsletter </a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
