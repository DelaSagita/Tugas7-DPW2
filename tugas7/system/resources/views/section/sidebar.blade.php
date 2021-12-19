<?php
function check($route)
{
    if (Route::current()->uri == $route) {
        return 'nav-link active';
    }
}
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">
                    @if (Auth::check())
                        {{ request()->user()->username }}
                    @else
                        silakan login
                    @endif
                </a>
            </div>
        </div>


        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

                <ul class="nav ">
                    <li class="nav-item">
                        <a href="{{ url('admin/dashboard') }}" class="nav-link {{ check('admin/dashboard') }}">
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/kategori') }}" class="nav-link {{ check('admin/kategori') }}">
                            <p>Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/produk') }}" class="nav-link {{ check('admin/produk') }}">
                            <p>Produk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/user') }}" class="nav-link {{ check('admin/user') }}">
                            <p>User</p>
                        </a>
                    </li>
                </ul>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
