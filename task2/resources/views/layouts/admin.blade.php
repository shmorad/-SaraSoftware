<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/core/core.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('backend/mages/favicon.png') }}" />
  </head>
  <body>
    <div class="main-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar">
        <div class="sidebar-header">
          <a href="#" class="sidebar-brand"><img width="100" src="{{ asset('images/web-logo-color.png') }}" alt=""></a>
          <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="sidebar-body">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">web apps</li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Users</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="users">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('users') }}" class="nav-link">User List</a>
                  </li>                
                </ul>
              </div>
            </li> --}}


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Category</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="category">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('category') }}" class="nav-link">Category List</a>
                  </li>                                
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#product" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Products</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="product">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('product') }}" class="nav-link">Product List</a>
                  </li>                                
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#message" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Message</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="message">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('message') }}" class="nav-link">Message List</a>
                  </li>                                
                </ul>
              </div>
            </li>



          </ul>
        </div>
      </nav>
      <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar">
          <a href="#" class="sidebar-toggler">
            <i data-feather="menu"></i>
          </a>
          <div class="navbar-content">
            <form class="search-form">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i data-feather="search"></i>
                  </div>
                </div>
                <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown nav-messages">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="mail"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="messageDropdown">
                  <div class="dropdown-header d-flex align-items-center justify-content-between">
                    <p class="mb-0 font-weight-medium">9 New Messages</p>
                    <a href="javascript:;" class="text-muted">Clear all</a>
                  </div>
                  <div class="dropdown-body">
                    <a href="javascript:;" class="dropdown-item">
                      <div class="figure">
                        <img src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="content">
                        <div class="d-flex justify-content-between align-items-center">
                          <p>Leonardo Payne</p>
                          <p class="sub-text text-muted">2 min ago</p>
                        </div>
                        <p class="sub-text text-muted">Project status</p>
                      </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item">
                      <div class="figure">
                        <img src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="content">
                        <div class="d-flex justify-content-between align-items-center">
                          <p>Carl Henson</p>
                          <p class="sub-text text-muted">30 min ago</p>
                        </div>
                        <p class="sub-text text-muted">Client meeting</p>
                      </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item">
                      <div class="figure">
                        <img src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="content">
                        <div class="d-flex justify-content-between align-items-center">
                          <p>Jensen Combs</p>
                          <p class="sub-text text-muted">1 hrs ago</p>
                        </div>
                        <p class="sub-text text-muted">Project updates</p>
                      </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item">
                      <div class="figure">
                        <img src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="content">
                        <div class="d-flex justify-content-between align-items-center">
                          <p>Amiah Burton</p>
                          <p class="sub-text text-muted">2 hrs ago</p>
                        </div>
                        <p class="sub-text text-muted">Project deadline</p>
                      </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item">
                      <div class="figure">
                        <img src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="content">
                        <div class="d-flex justify-content-between align-items-center">
                          <p>Yaretzi Mayo</p>
                          <p class="sub-text text-muted">5 hr ago</p>
                        </div>
                        <p class="sub-text text-muted">New record</p>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-footer d-flex align-items-center justify-content-center">
                    <a href="javascript:;">View all</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown nav-notifications">
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="bell"></i>
                  <div class="indicator">
                    <div class="circle"></div>
                  </div>
                </a>
                <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                  <div class="dropdown-header d-flex align-items-center justify-content-between">
                    <p class="mb-0 font-weight-medium">6 New Notifications</p>
                    <a href="javascript:;" class="text-muted">Clear all</a>
                  </div>
                  <div class="dropdown-body">
                    <a href="javascript:;" class="dropdown-item">
                      <div class="icon">
                        <i data-feather="user-plus"></i>
                      </div>
                      <div class="content">
                        <p>New customer registered</p>
                        <p class="sub-text text-muted">2 sec ago</p>
                      </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item">
                      <div class="icon">
                        <i data-feather="gift"></i>
                      </div>
                      <div class="content">
                        <p>New Order Recieved</p>
                        <p class="sub-text text-muted">30 min ago</p>
                      </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item">
                      <div class="icon">
                        <i data-feather="alert-circle"></i>
                      </div>
                      <div class="content">
                        <p>Server Limit Reached!</p>
                        <p class="sub-text text-muted">1 hrs ago</p>
                      </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item">
                      <div class="icon">
                        <i data-feather="layers"></i>
                      </div>
                      <div class="content">
                        <p>Apps are ready for update</p>
                        <p class="sub-text text-muted">5 hrs ago</p>
                      </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item">
                      <div class="icon">
                        <i data-feather="download"></i>
                      </div>
                      <div class="content">
                        <p>Download completed</p>
                        <p class="sub-text text-muted">6 hrs ago</p>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-footer d-flex align-items-center justify-content-center">
                    <a href="javascript:;">View all</a>
                  </div>
                </div>
              </li>
              {{-- <li class="nav-item dropdown nav-profile">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  @if (Auth::user()->image==null)
                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                  @else
                   <img src="{{ asset('uploads/users/'.Auth::user()->image) }}" alt="profile">
                  @endif
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                  <div class="dropdown-header d-flex flex-column align-items-center">
                    <div class="figure mb-3">
                      @if (Auth::user()->image==null)
                        <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                      @else
                        <img src="{{ asset('uploads/users/'.Auth::user()->image) }}" alt="">
                      @endif 
                    </div>
                    <div class="info text-center">
                      <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                      <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                    </div>
                  </div>
                  <div class="dropdown-body">
                    <ul class="profile-nav p-0 pt-3">
                      <li class="nav-item">
                        <a href="{{ route('user.frofile_edit') }}" class="nav-link">
                          <i data-feather="edit"></i>
                          <span>Edit Profile</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
						document.getElementById('logout-form').submit();" class="nav-link">
                          <i data-feather="log-out"></i>
                          <span>Log Out</span>
                        </a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
                      </li>
                    </ul>
                  </div>
                </div>
              </li> --}}
            </ul>
          </div>
        </nav>




        <!-- main -->
        <div class="page-content">
           @yield('content')
        </div>
        <!-- main -->




        <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
          <p>© 2023 Copy Right Fashion . All Right Deserved. Md.Sahadat Hossain (Morad Patwary)</p>
        </footer>
        <!-- partial -->
      </div>
    </div>
    <!-- core:js -->
    <script src="{{ asset('backend/vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('backend/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('backend/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="{{ asset('backend/js/dashboard.js')}}"></script>
    <script src="{{ asset('backend/js/datepicker.js')}}"></script>
    <!-- end custom js for this page -->
  </body>
</html>