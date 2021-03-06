<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      <img src="{{asset('adminassets/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Home</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminassets/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
               Speakers
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item activee">
                <a href="{{route('active-speaker-page')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Active Speakers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('inactive-speaker-page')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Pending Speakers</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('featured-speaker-page')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Featured Speakers</p>
                </a>
              </li>


              <li class="nav-item">
                  <a href="{{route('about-edit-page')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Edit Terms</p>
                  </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('privacy-edit-page')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Edit Policy</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('email-edit-page')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Edit Email</p>
                    </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{route('ConfirmPageShow')}}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Payment Information</p>
                      </a>
                    </li>

                  
                <li class="nav-item">
                    <a href="{{route('updatespage')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Updates</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('export-users')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Export Users</p>
                    </a>
                  </li>

            </ul>
          </li>
          
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

{{-- Logout Button --}}
<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
</form>