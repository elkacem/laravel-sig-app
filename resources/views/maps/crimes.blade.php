
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>PFE</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')  }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')  }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')  }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">



    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
                    tileLayer:"CRIMES",
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
<body class="hold-transition sidebar-collapse layout-top-nav" onload=javascript:showMap();>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="https://fr.wikipedia.org/wiki/Criminologie#:~:text=La%20criminologie%20est%20l'%C3%A9tude,de%20vue%20individuel%20et%20social." class="brand-link">
            <img src="{{asset('dist/img/logo.png')}} "  class="brand-image img-circle elevation-3"
                 style="">
            <span class="brand-text font-weight-light">Criminologie</span>
        </a>


        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/maps" class="nav-link">Généralisation</a>
                </li>
                <li class="nav-item">
                    <a href="/crime" class="nav-link">Crimes</a>
                </li>
                <li class="nav-item">
                    <a href="/poste" class="nav-link">Sécurité</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Statistiques</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="{{route('charts',['requete'=>1])}}" class="dropdown-item">Nombre de Crimes par Commune  </a></li>
                        <li><a href="{{route('charts',['requete'=>2])}}" class="dropdown-item">Nombre de Crimes par TypeCrime  </a></li>
                        <li><a href="{{route('charts',['requete'=>3])}}" class="dropdown-item">Nombre de Crimes par Temps  </a></li>
                        <li><a href="{{route('charts',['requete'=>4])}}" class="dropdown-item">Nombre de Crimes par Nationalité  </a></li>
                        <li><a href="{{route('charts',['requete'=>5])}}" class="dropdown-item">Nombre de Crimes par caté-d'age  </a></li>
                        <li><a href="{{route('charts',['requete'=>6])}}" class="dropdown-item">Nombre des PostePolices par daira  </a></li>



                        <li class="dropdown-divider"></li>


                    </ul>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">A propos </a>
                </li>

            </ul>

            <!-- SEARCH FORM -->

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                        class="fas fa-th-large"></i> Déconnexion</a>
            </li>

        </ul>

    </div>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> <small>La Distribution Des</small> Crimes </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<div id="map" style="left:0px; top:0px; width:100%; height:100%; float: right;z-index: inherit"></div>

<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<!-- /.control-sidebar -->

<!-- Main Footer -->
<!-- ./wrapper -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Version 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020  All rights reserved.
</footer>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')  }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')  }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')  }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')  }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')  }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')  }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')  }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')  }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')  }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')  }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')  }}"></script>
<!-- AdminLTE App -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')  }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')  }}"></script>
</body>
</html>


