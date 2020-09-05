<!DOCTYPE html>
<html lang="en">
<style>
    .nav-border {
        /* border: 1px solid white; */
    }

    .hidden li i{
        visibility: hidden;
    }

    .list-group .list-group-item {
        color: black;
    }
    .paymentUl li {
        margin-top: 5px;
    }
</style>

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="EDMS - Electornic Document Management System">

    <title>Job Portal</title>
    <!-- Icons-->
    <link href="{{ asset('adminpaneldesign/vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('adminpaneldesign/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">


    <link href="{{ asset('adminpaneldesign/vendors/bootstrap-daterangepicker/css/daterangepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/select2/css/select2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('adminpaneldesign/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"
        rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/ladda/css/ladda-themeless.min.css') }}" rel="stylesheet">

{{--<link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet">--}}
<link rel="stylesheet" href="{{asset('extra/select2/select2.min.css')}}">
{{-- SWEET ALERT  --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

</head>


<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/admin/landing') }}">
        @if(Auth::user()->role == 'Admin')
            Job Portal Admin
        @else
            Company Admin
        @endif
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav ml-auto">

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest('admin')
                        @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button style="border: none; background-color:white" onclick="return confirm('Are you sure you want to logout?')">
                                        Logout
                                    </button>
                                </form>
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ auth('admin')->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @admin('super')
                                <a class="dropdown-item" href="{{ route('admin.show') }}">{{
                                    ucfirst(config('multiauth.prefix')) }}</a>
                                @permitToParent('Role')
                                <a class="dropdown-item" href="{{ route('admin.main.roles') }}">Roles</a>
                                @endpermitToParent
                                @endadmin
                                <a class="dropdown-item" href="{{ route('admin.password.change') }}">Change Password</a>
                                <a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      </ul>

    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/landing')}}">
                  <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
              </li>

                @if(Auth::user()->role == 'Admin')

                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/users')}}">
                    <i class="nav-icon icon-list"></i> User </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/category') }}">
                    <i class="nav-icon icon-list"></i> Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/type') }}">
                      <i class="nav-icon icon-list"></i> Type</a>
                </li>
                @endif

               @if(Auth::user()->role == 'Company' && Auth::user()->status == 'accepted')
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/job') }}">
                    <i class="nav-icon icon-list"></i> Job</a>
                </li>
                @endif
            </li>

            </li>


          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main" id="app">
        <!-- Breadcrumb-->
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>

        @yield('content')
      </main>

    </div>

    <script src="{{ asset('adminpaneldesign/vendors/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/popper.js/js/popper.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/@coreui/coreui-pro/js/coreui.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    {{-- <script src="{{ asset('adminpaneldesign/vendors/chart.js/js/Chart.min.js') }}"></script> --}}
    {{-- <script
        src="{{ asset('adminpaneldesign/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js') }}">
    </script> --}}
    <script src="{{ asset('adminpaneldesign/js/main.js') }}"></script>



    <!-- Plugins and scripts required by form-->
    <script src="{{ asset('adminpaneldesign/vendors/jquery.maskedinput/js/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/bootstrap-daterangepicker/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/js/advanced-forms.js') }}"></script>


    <script src="{{ asset('adminpaneldesign/vendors/datatables.net/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/js/datatables.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/ladda/js/spin.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/ladda/js/ladda.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/js/loading-buttons.js') }}"></script>
    {{-- SWEET ALERT  --}}
    {{-- <script src="{{asset('js/sweetalert.js')}}"></script> --}}
    {{-- @include('Alerts::show') --}}
    <script>

        function myFunction() {
            if(!confirm("Are You Sure to delete this"))
            event.preventDefault();
        }

        function myRestoreFunction() {
            if(!confirm("Are you sure to restore this"))
            even.preventDefault();
        }

    </script>

</body>

</html>
