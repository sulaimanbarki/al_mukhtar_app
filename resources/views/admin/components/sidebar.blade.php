<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard"
                        class="nav-link
                  @if (Request::is('dashboard')) active @endif
                  ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/users"
                        class="nav-link
                  @if (Request::is('users')) active @endif
                  ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Authors
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/categories"
                        class="nav-link
                  @if (Request::is('categories')) active @endif
                  ">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/books"
                        class="nav-link
                  @if (Request::is('books')) active @endif
                  ">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Books
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/multimedia"
                        class="nav-link
                  @if (Request::is('multimedia')) active @endif
                  ">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Multimedia
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/settings"
                        class="nav-link
                  @if (Request::is('settings')) active @endif
                  ">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/backupdb"
                        class="nav-link
                  @if (Request::is('backupdb')) active @endif
                  ">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Backup
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
