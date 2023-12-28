<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="icon" href="{{ asset('img/Logo.jpeg') }}">
        <title>Website Admin Donomerto</title> 
        <!-- Google Font: Source Sans Pro --> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> 
        
        <!-- Font Awesome Icons --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> 
        
        <!-- Theme style --> 
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}"> 
    </head> 
    
    <body class="hold-transition sidebar-mini"> 
        <div class="wrapper"> 
            <!-- Navbar --> 
            <nav class="main-header navbar navbar-expand navbar-white navbar-light"> 
                <!-- Left navbar links --> 
                <ul class="navbar-nav"> 
                    <li class="nav-item"> 
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"> 
                            <i class="fas fa-bars"></i> 
                        </a>
                    </li> 
                </ul> 
                
                <!-- Right navbar links --> 
                <ul class="navbar-nav ml-auto"> 
                    <!-- Navbar Search --> 
                    <li class="nav-item"> 
                        <div class="navbar-search-block"> 
                            <form class="form-inline"> 
                                <div class="input-group input-group-sm"> 
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"> 
                                    <div class="input-group-append"> 
                                        <button class="btn btn-navbar" type="submit"> 
                                            <i class="fas fa-search"></i> 
                                        </button> 
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search"> 
                                            <i class="fas fa-times"></i> 
                                        </button> 
                                    </div> 
                                </div> 
                            </form> 
                        </div> 
                    </li> 
                    
                    <li class="nav-item"> 
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button"> 
                            <i class="fas fa-expand-arrows-alt"></i> 
                        </a> 
                    </li> 
                </ul> 
            </nav> 
            <!-- /.navbar --> 
            
            <!-- Main Sidebar Container --> 
            <aside class="main-sidebar sidebar-dark-primary elevation-4"> 
                <!-- Brand Logo --> 
                <a href="/home" class="brand-link">
                    <img src=" {{ asset('img/Logo.jpeg') }}" alt="Website Donomerto Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> 
                    <span class="brand-text font-weight-light">Website Donomerto</span> 
                </a>
                <!-- Sidebar --> 
                <div class="sidebar"> 
                    <!-- Sidebar Menu --> 
                    <nav class="mt-2"> 
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
                            <li class="nav-item"> 
                                <a href="{{ url('berita') }}" class="nav-link"> 
                                    <i class="nav-icon fa-solid fa-circle-info"></i> 
                                        <p> Informasi</p> 
                                </a> 
                            </li>
                            <li class="nav-item"> 
                                <a href="{{ url('jabatan') }}" class="nav-link"> 
                                    <i class="nav-icon fa-solid fa-user"></i>
                                        <p> Profile</p> 
                                </a> 
                            </li> 
                            <li class="nav-item"> 
                                <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> 
                                    <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                                        <p> Logout</p> 
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form> 
                            </li> 
                        </ul> 
                    </nav> 
                    
                    <!-- /.sidebar-menu --> 
                </div> 
                
                <!-- /.sidebar --> 
            </aside> 
            
            <!-- Content Wrapper. Contains page content --> 
            <div class="content-wrapper"> @yield('content') </div> 
            <!-- /.content-wrapper --> 
            
            <!-- Main Footer -->
            <footer class="main-footer"> 
                <!-- To the right --> 
                <div class="float-right d-none d-sm-inline"> DEVELOPER DONOMERTO </div> 
                <!-- Default to the left --> 
                <strong>Copyright &copy; {{ date('Y') }} 
                    {{-- <a href="#">AdminLTE.io</a>.  --}}
                </strong> All rights reserved. 
            </footer> 
        </div> 

        <!-- ./wrapper --> 
        <!-- REQUIRED SCRIPTS --> 
        <!-- jQuery --> 
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> 
        <!-- Bootstrap 4 --> 
        <script src="{{ asset('plugins/js/bootstrap.bundle.min.js') }}"></script> 
        <!-- AdminLTE App --> 
        <script src="{{ asset('js/adminlte.min.js') }}"></script> 
    </body> 
</html>