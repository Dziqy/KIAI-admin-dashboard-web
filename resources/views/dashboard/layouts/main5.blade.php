<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>KIAI | Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../../assets/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="../../../../assets/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../../../../assets/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../../../../assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Color picker plugins css -->
    <link href="../../../../assets/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="../../../../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="../../../../assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="../../../../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="../../../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="../../../../assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../../../../assets/css/style.css" rel="stylesheet">
    

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="/dashboard">
                    <b class="logo-abbr"><img src="../../../../assets/images/tes.png" alt=""> </b>
                    <span class="logo-compact"><img src="../../../../assets/images/tes.png" alt=""></span>
                    <span class="brand-title">
                        <img src="../../../../assets/images/logomain.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        @include('dashboard.layouts.header5')

        @include('dashboard.layouts.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
                @yield('main')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Adz Dziqy</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../../../../assets/plugins/common/common.min.js"></script>
    <script src="../../../../assets/js/custom.min.js"></script>
    <script src="../../../../assets/js/settings.js"></script>
    <script src="../../../../assets/js/gleek.js"></script>
    <script src="../../../../assets/js/styleSwitcher.js"></script>

    <!-- TableDatabase -->
    <script src="../../../../assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../../../../assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    <!-- Chartjs -->
    <script src="../../../../assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="../../../../assets/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="../../../../assets/plugins/d3v3/index.js"></script>
    <script src="../../../../assets/plugins/topojson/topojson.min.js"></script>
    <script src="../../../../assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="../../../../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../../../../assets/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="../../../../assets/plugins/moment/moment.min.js"></script>
    <script src="../../../../assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="../../../../assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="../../../../assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    

    <script src="../../../../assets/plugins/moment/moment.js"></script>
    <script src="../../../../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="../../../../assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="../../../../assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="../../../../assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="../../../../assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../../../../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="../../../../assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../../../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../../../../assets/js/plugins-init/form-pickers-init.js"></script>

    
    {{-- <script src="../../../../assets/plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../../../../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../../../assets/js/plugins-init/jquery-steps-init.js"></script> --}}

    <script src="../../../../assets/js/dashboard/dashboard-1.js"></script>

</body>

</html>