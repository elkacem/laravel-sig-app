



@extends('layouts.master')


@section('content')


    <section class="content">
        <div class="container-fluid">
            @if($requete == 1)
                <div class="row">
                    <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Nombre des crimes par commune</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="areaChart"

                                            width="350" height="250" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col (LEFT) -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tableau de Nombre des crimes par commune</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Commune</th>
                                        <th scope="col">Nombre des Crimes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($res['COMMUNE'] as $key=>$re)
                                        <tr>
                                            <th scope="row">{{$key}}</th>
                                            <td>{{$res['COMMUNE'][$key]}}</td>
                                            <td>{{$res['NBR'][$key]}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.col (RIGHT) -->
                </div>
            @endif

            @if($requete == 4)
                <div class="row">
                    <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Nombre des crimes par nationalité</h3>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="donutChart" width="350" height="250" class="chartjs-render-monitor">

                                </canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col (LEFT) -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tableau de Nombre des crimes par nationalité</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NATIONALITE</th>
                                        <th scope="col">Nombre des Crimes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($res3['NATIONALITE'] as $key=>$re)
                                        <tr>
                                            <th scope="row">{{$key}}</th>
                                            <td>{{$res3['NATIONALITE'][$key]}}</td>
                                            <td>{{$res3['NBRN'][$key]}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.col (RIGHT) -->
                </div>
            @endif
            @if($requete == 6)
                <div class="row">
                    <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Nombre des postePolice par daira</h3>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="pieChart"

                                        width="350" height="250" class="chartjs-render-monitor"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col (LEFT) -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tableau de Nombre des postePolice par daira</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Daira</th>
                                        <th scope="col">Nombre des PostePolice</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($res5['DAIRA'] as $key=>$re)
                                        <tr>
                                            <th scope="row">{{$key}}</th>
                                            <td>{{$res5['DAIRA'][$key]}}</td>
                                            <td>{{$res5['NBRP'][$key]}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.col (RIGHT) -->
                </div>
            @endif
            @if($requete == 3)
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">La révolution des nombres des crimes par temps</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="chartJSContainer" width="350" height="250" class="chartjs-render-monitor">


                                    </canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col (LEFT) -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tableau des nombres des crimes par temps</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Temps</th>
                                        <th scope="col">Nombre de crime</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($res2['ANNE'] as $key=>$re)
                                        <tr>
                                            <th scope="row">{{$key}}</th>
                                            <td>{{$res2['ANNE'][$key]}}</td>
                                            <td>{{$res2['NBR1'][$key]}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                    </div>
                    <!-- /.col (RIGHT) -->
                </div>
            @endif
            @if($requete == 5)
                <div class="row">
                    <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Nombre des crimes par catégorie d'age</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="barChart" width="350" height="250" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col (LEFT) -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tableau de Nombre des crimes par catégorie d'age</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Catégorie</th>
                                        <th scope="col">Nombre de crime</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($res4['LIB'] as $key=>$re)
                                            <tr>
                                                <th scope="row">{{$key}}</th>
                                                <td>{{$res4['LIB'][$key]}}</td>
                                                <td>{{$res4['NBRA'][$key]}}</td>
                                            </tr>
                                     @endforeach

                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col (RIGHT) -->
                    </div>
                @endif
                @if($requete == 2)
                    <div class="row">
                        <div class="col-md-6">
                            <!-- AREA CHART -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Nombre des crimes par typeCrime</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="mypiechart"

                                                width="350" height="250" class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col (LEFT) -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tableau de Nombre des crimes par typeCrime</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Type Crime</th>
                                        <th scope="col">Nombre de crime</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($res1['LIB_TYPE'] as $key=>$re)
                                        <tr>
                                            <th scope="row">{{$key}}</th>
                                            <td>{{$res1['LIB_TYPE'][$key]}}</td>
                                            <td>{{$res1['NBR'][$key]}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                        <!-- /.col (RIGHT) -->
                    </div>
                @endif







            </div><!-- /.container-fluid -->
        </section>

    @endsection

    @section('scripts')

        <script>
            @if($requete == 1)
                @include('charts.premier')
            @endif
            @if($requete == 2)
                @include('charts.dexieme')
            @endif
            @if($requete == 3)
                @include('charts.troisieme')
            @endif
            @if($requete == 4)
                @include('charts.quatrieme')
            @endif
            @if($requete == 5)
                @include('charts.cinqueme')
            @endif
            @if($requete == 6)
                @include('charts.sixieme')
            @endif
        </script>
    @endsection
    @section('ok')
        @include('test')
    @endsection

