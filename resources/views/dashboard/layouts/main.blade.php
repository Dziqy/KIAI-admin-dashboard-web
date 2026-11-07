<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>KIAI | Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="assets/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="assets/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

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
                    <b class="logo-abbr"><img src="assets/images/2.png" alt=""> </b>
                    <span class="logo-compact"><img src="assets/images/2.png" alt=""></span>
                    <span class="brand-title">
                        <img src="assets/images/logomain.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        @include('dashboard.layouts.header')

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
    <script src="assets/plugins/common/common.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/gleek.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>

    <!-- TableDatabase -->
    <script src="assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    <!-- Chartjs -->
    <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="assets/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="assets/plugins/d3v3/index.js"></script>
    <script src="assets/plugins/topojson/topojson.min.js"></script>
    <script src="assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    {{-- <script src="assets/plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/plugins-init/jquery-steps-init.js"></script> --}}

    <script src="assets/js/dashboard/dashboard-1.js"></script>

         <!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCgjR3VGFDb25MZUb5l_2N6zCsICPFDaZA&callback=initMap"></script>

    <script>

        // variabel global marker
        var marker;
        var infowindow;

        function pindahMarker(position ){
            infowindow.setPosition(position);
    document.getElementById("latitude").value = position.lat();
    document.getElementById("longitude").value = position.lng();
   
  }
        
        function initialize() {
          
            var propertiPeta = {
                center:new google.maps.LatLng(-7.040670025642685, 110.53095891801439),
                zoom:7,
                mapTypeId:google.maps.MapTypeId.SATELIT
            };
            
            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
            
            @foreach ($locations as $item)
                marker=new google.maps.Marker({
                    position: new google.maps.LatLng({{ $item->latitude }},{{ $item->longitude }}),
                    map: peta,
                    // icon: 'assets/icons/map.png',
                });
                
                google.maps.event.addListener(marker,'click',function() {
                $text = "<h6><b>{{ $item->nama }}</b></h6>{{ $item->alamat }}<br><a href='/dashboard/kelola_majelis/{{ $item->id }}' class='text-primary'>Tampilan Detail</a>";
                infowindow = new google.maps.InfoWindow({
                    content: $text,
                    maxWidth: 200 ,
                    position: new google.maps.LatLng({{ $item->latitude }},{{ $item->longitude }})
                    });
                    infowindow.open(peta,marker['{{ $item->nama }}']); 
                }); 
            @endforeach
        }
        
        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
        
        function muncul(){
            document.getElementById("collapseThree6").className = "collapse show";
        }

    </script>

</body>

</html>