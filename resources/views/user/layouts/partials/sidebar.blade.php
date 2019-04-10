<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center" target="_blank">
      <span class="brand-text font-weight-light">{{auth()->user()->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminassets/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->email}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" id="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('userdashboard')}}" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
               Speaker Profile
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">

                <li class="nav-item activee">
                    <a href="{{route('userdashboard')}}" class="nav-link heee">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Name & Email</p>
                    </a>
                  </li>


              <li class="nav-item">
                <a href="{{route('dashboard.generalinfo')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>General Details</p>
                </a>
              </li>

              <li class="nav-item">
                  <a href="{{route('dashboard.language')}}" class="nav-link heee">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Languages</p>
                  </a>
                </li>

              <li class="nav-item">
                <a href="{{route('dashboard.expertise')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Expertise</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('dashboard.achievements')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Achievements</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('dashboard.available-for')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Available For</p>
                </a>
              </li>
             

              <li class="nav-item">
                <a href="{{route('dashboard.articles')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Articles</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.awards')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Awards</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.books')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Books</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.current-positions')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Current Positions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.degress')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Degrees</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.images')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Images</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.past-talks')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Past Talks</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.presentations')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Presentations</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.social-media-accounts')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Social Media Accounts</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('dashboard.videos')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Videos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('dashboard.workshops')}}" class="nav-link heee">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Workshops</p>
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

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

