<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="{{asset('public/admin_asset/assets/')}}" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Admin::Themelacleaning</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{asset('public/admin_asset/assets/img/favicon/favicon.ico')}}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/fonts/materialdesignicons.css')}}" />
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/fonts/flag-icons.css')}}" />

  <!-- Menu waves for no-customizer fix -->
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/node-waves/node-waves.css')}}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/css/rtl/core.css')}}" />
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/css/rtl/theme-default.css')}}" />
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/css/demo.css')}}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/tagify/tagify.css')}}" />
    <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
  @yield('links')


  <!-- Page CSS -->

  <link rel="stylesheet" href="{{asset('public/admin_asset/assets/vendor/css/pages/app-logistics-dashboard.css')}}" />

  <!-- Helpers -->
  <script src="{{asset('public/admin_asset/assets/vendor/js/helpers.js')}}"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{asset('public/admin_asset/assets/vendor/js/template-customizer.js')}}"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('public/admin_asset/assets/js/config.js')}}"></script>
</head>

<body>
  @yield('style')
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">

            <span class="app-brand-text demo menu-text fw-bold ms-2">THELMACLEANING</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z" fill="currentColor" fill-opacity="0.6" />
              <path d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z" fill="currentColor" fill-opacity="0.38" />
            </svg>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item">
            <a href="/admin" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
              <div data-i18n="Users">User's</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route('user.index')}}" class="menu-link">
                  <div data-i18n="List">List</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
              <div data-i18n="Employee">Employee's</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route('employee.index')}}" class="menu-link">
                  <div data-i18n="List">List</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-truck-outline"></i>
              <div data-i18n="Services">Service's</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route('service.index')}}" class="menu-link">
                  <div data-i18n="List">List</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{route('Extra.index')}}" class="menu-link">
                  <div data-i18n="Extra">Extra</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
              <div data-i18n="booking">Booking's</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route('booking.index')}}" class="menu-link">
                  <div data-i18n="New">New</div>
                </a>
              </li>
               <li class="menu-item">
                <a href="{{route('assigned.Booking')}}" class="menu-link">
                  <div data-i18n="Assigned">Assigned</div>
                </a>
              </li>
               <li class="menu-item">
                <a href="{{route('complete.Booking')}}" class="menu-link">
                  <div data-i18n="Complete">Complete</div>
                </a>
              </li>
               <li class="menu-item">
                <a href="{{route('rejected.Booking')}}" class="menu-link">
                  <div data-i18n="Rejected">Rejected</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-header fw-medium mt-4">
            <span class="menu-header-text">Website management</span>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-file-outline"></i>
              <div data-i18n="Pages">Pages</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route('admin.contact')}}" class="menu-link">
                  <div data-i18n="Home Page">Home Page</div>
                </a>
                 <a href="{{route('admin.about')}}" class="menu-link">
                  <div data-i18n="About">About Us</div>
                </a>
                <a href="{{route('admin.privacy')}}" class="menu-link">
                  <div data-i18n="Privacy">Privacy Policy</div>
                </a>
                <a href="{{route('admin.terms')}}" class="menu-link">
                  <div data-i18n="Terms">Terms</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="{{route('admin.setting')}}" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-cog-outline"></i>
              <div data-i18n="Setting">Setting</div>
            </a>
          </li>
        </ul>
        </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="mdi mdi-menu mdi-24px"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                  <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                  <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                </a>
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Style Switcher -->
              <!-- <li class="nav-item dropdown-style-switcher dropdown me-1 me-xl-0">
                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  *
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                      <span class="align-middle"><i class="mdi mdi-weather-sunny me-2"></i>Light</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                      <span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Dark</span>
                    </a>
                  </li>
                </ul>
              </li> -->
              <!-- / Style Switcher-->


              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="{{asset('public/admin_asset/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="{{asset('public/admin_asset/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{route('admin.setting')}}">
                      <i class="mdi mdi-account-outline me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      <i class="mdi mdi-logout me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>


        </nav>

        <!-- / Navbar -->
        @yield('content')

        @include('admin.layout.footer')