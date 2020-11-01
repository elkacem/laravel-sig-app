<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')  }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')  }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')  }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')  }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')  }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')  }}">

    <!-- Daterange picker -->
    <script language="Javascript" src="http://localhost:8080/mapviewer/jslib/v2/oraclemapsv2.js"></script>
    <script language=javascript>
        function showMap()
        {
            OM.gv.setResourcePath("http://localhost:8080/mapviewer/jslib/v2");
            var baseURL  = "http://localhost:8080/mapviewer";
            var mapCenterLon = 3.092;
            var mapCenterLat =  36.701;
            var mapZoom      =  3;
            var mpoint = new OM.geometry.Point(mapCenterLon,mapCenterLat,8307);
            var map = new OM.Map(
                document.getElementById('map'),
                {
                    mapviewerURL: baseURL
                }) ;
            var tileLayer = new OM.layer.TileLayer(
                "tileLayer",
                {
                    dataSource:"mvdemo",
                    tileLayer:"ZOOMINTELLIGENT",
                    tileServerURL:baseURL+"/mcserver"
                });
            map.addLayer(tileLayer) ;
            navigationPanelBar=new OM.control.NavigationPanelBar();
            navigationPanelBar.setStyle({backgroundColor:"#FFFFFF",buttonColor:"#808080",size:12});
            map.addMapDecoration(navigationPanelBar);
            map.setMapCenter(mpoint);
            map.setMapZoomLevel(mapZoom) ;
            map.init() ;
        }
    </script>

</head>
<body class="hold-transition sidebar-mini layout-fixed" onload=javascript:showMap();>


<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/logo.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="">
        <span class="brand-text font-weight-light">Criminologie</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"  data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="/charts" class="nav-link active">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Requête

                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="/maps" class="nav-link active">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            GeneralisationC

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->


<div id="map" style="left:0px; top:0px; width:84%; height:100%; float: right;z-index: inherit"></div>

<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2020.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->


<!-- AdminLTE App -->

<!-- ./wrapper -->
</body>
</html>






