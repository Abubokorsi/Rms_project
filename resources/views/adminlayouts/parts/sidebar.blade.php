<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Topcontent
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Topcontent.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topcontent Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Topcontent.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Topcontent</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Banner
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Banner.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Banner.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Banner</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Welcome
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Welcome.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Welcome Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Welcome.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Welcome</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Specialty
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Specialty.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Specialty Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Specialty.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Specialty</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Category
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Category.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Item
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Item.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Item Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Item.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Item</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Special_category
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Special_category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Special_category Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Special_category.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Special_category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Special_item
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Special_item.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Special_item Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Special_item.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Special_item</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Slider
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Slider.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Slider.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Slider</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Booking
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Booking.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Testimonials
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Testimonials.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonials Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Testimonials.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Testimonials</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Gallery
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Gallery.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Gallery.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Chef
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Chef.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chef Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Chef.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Chef</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Location
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Location.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Location Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Location.create')}}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Location</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Complian
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Complian.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Complian Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <form id="logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout_form').submit();" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>