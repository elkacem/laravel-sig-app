@extends('layouts.maps')
@section('scripts')
    <script language="Javascript" src="http://localhost:8080/mapviewer/jslib/v2/oraclemapsv2.js"></script>
    <script language=javascript>
        function showMap()
        {
            OM.gv.setResourcePath("http://localhost:8080/mapviewer/jslib/v2");
            var baseURL  = "http://localhost:8080/mapviewer";
            var mapCenterLon = 3.092;
            var mapCenterLat =  36.701;
            var mapZoom      =  1;
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
                    tileLayer:"ECHELLE4",
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
@endsection
