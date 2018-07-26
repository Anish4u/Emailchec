<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Send mail</title>
        <!-- Styles -->
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('css/myApp.css') }}" rel="stylesheet">


    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div id="app">
            <div class="wrapper">
                <header class="main-header">

                    <!-- Logo -->
                    <a href="/compose" class="logo navbar-fixed-top">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <span class="logo-mini"><b>Email</b> Send</span>
                        <!-- logo for regular state and mobile devices -->
                        <span class="logo-lg"><b>Email</b> Send</span>
                    </a>

                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class="navbar navbar-static-top navbar-fixed-top">
                        <!-- Sidebar toggle button-->
                        <a href="#" class=" glyphicon glyphicon-list sidebar-toggle" data-toggle="push-menu" role="button">
                            <span class="sr-only glyphicon glyphicon-list ">Toggle navigation</span>
                        </a>
                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">



                                <!-- User Account: style can be found in dropdown.less -->
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('img/avatar.png') }}" class="user-image" alt="User Image">
                                        <span class="hidden-xs">User</span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <!-- User image -->
                                        <li class="user-header">
                                            <img src="{{ asset('img/avatar.png') }}" class="img-circle" alt="User Image">

                                            <p>
                                              Username
                                            </p>
                                        </li>
                                        <li class="user-footer">


                                          <div class="pull-left">
                                              <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                                          </div>
                                            <!-- <div class="pull-right">

                                                <a class="btn btn-default btn-flat" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Sign out
                                                </a>

                                                <form id="logout-form" action="#" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>

                                            </div> -->
                                        </li>

                                    </ul>
                                    </div>

                                    </nav>
                                    </header>

                                    @yield('content')

                                <!-- <flash message="{{session('flash')}}"></flash> -->


                        </div>
                        <footer class="main-footer">
                            <div class="pull-right hidden-xs">
                                <b>Version</b> 1.0
                            </div>
                            <strong>Copyright &copy; 2017-2019 <a href="#">Email send</a>.</strong> All rights
                            reserved.
                        </footer>
                        </div>

                        <!-- Scripts -->
                        <script src="{{ asset('js/app.js') }}"></script>
                          <!-- <script src="{{ asset('js/ckeditor.js') }}"></script>
                            <script src="{{ asset('js/ckeditoreditor.js') }}"></script> -->


                        </body>
                        </html>
