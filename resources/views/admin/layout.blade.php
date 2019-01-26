<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="/admin/assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Turbo - Bootstrap Material Admin Dashboard Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Bootstrap core CSS     -->
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    <link href="/admin/assets/css/turbo.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/admin/assets/css/demo.css" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <link href="/admin/assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css"
          rel="stylesheet">

</head>

<body>
<div class="wrapper">
    <div class="sidebar">
        <div class="logo">
            <a href="#" class="simple-text">
                Record Io
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="#" class="simple-text">
                T
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="/dashboard">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/profile">
                        <i class="material-icons">grid_on</i>
                        <p>profile Search</p>
                    </a>
                </li>

                <li>
                    <a href="/profile/create">
                        <i class="material-icons">extension</i>
                        <p>profile Create</p>
                    </a>
                </li>

                <li>
                    <a href="/result/create">
                        <i class="material-icons">apps</i>
                        <p>Result Create</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-absolute" data-topbar-color="blue">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                        <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">6</span>
                                <p class="hidden-lg hidden-md">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">You have 5 new messages</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Mike</a>
                                </li>
                                <li>
                                    <a href="#">Wish Mary on her birthday!</a>
                                </li>
                                <li>
                                    <a href="#">5 warnings in Server Console</a>
                                </li>
                                <li>
                                    <a href="#">Jane completed 'Induction Training'</a>
                                </li>
                                <li>
                                    <a href="#">'Prepare Marketing Report' is overdue</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">apps</i>
                                <p class="hidden-lg hidden-md">Apps</p>
                            </a>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">settings</i>
                                <p class="hidden-lg hidden-md">Settings</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="#">Turbo</a> BootStrap Admin Dashboard
                </p>
            </div>
        </footer>
    </div>

</div>
</body>
<!--   Core JS Files   -->
<script src="/admin/assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="/admin/assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
<script src="/admin/assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="/admin/assets/vendors/material.min.js" type="text/javascript"></script>
<script src="/admin/assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="/admin/assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="/admin/assets/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="/admin/assets/vendors/charts/flot/jquery.flot.js"></script>
<script src="/admin/assets/vendors/charts/flot/jquery.flot.resize.js"></script>
<script src="/admin/assets/vendors/charts/flot/jquery.flot.pie.js"></script>
<script src="/admin/assets/vendors/charts/flot/jquery.flot.stack.js"></script>
<script src="/admin/assets/vendors/charts/flot/jquery.flot.categories.js"></script>
<script src="/admin/assets/vendors/charts/chartjs/Chart.min.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="/admin/assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="/admin/assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="/admin/assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="/admin/assets/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="/admin/assets/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAurmSUEQDwY86-wOG3kCp855tCI8lHL-I"></script>
<!-- Select Plugin -->
<script src="/admin/assets/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="/admin/assets/vendors/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="/admin/assets/vendors/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/admin/assets/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="/admin/assets/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="/admin/assets/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="/admin/assets/js/turbo.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="/admin/assets/js/demo.js"></script>

<script src="/admin/assets/js/charts/flot-charts.js"></script>
<script src="/admin/assets/js/charts/chartjs-charts.js"></script>

@yield('js_assets')
<script type="text/javascript">
    $(document).ready(function () {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initVectorMap();
    });
</script>

</html>
