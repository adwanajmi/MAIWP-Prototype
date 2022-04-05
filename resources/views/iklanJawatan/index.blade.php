@extends('base')
@section('content')
    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
        <style>
            #chartdiv {
                width: 100%;
                height: 500px;
            }

        </style>

        <div class="card h-md-100 ecommerce-card-min-width">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0" style="text-align: center">Statistik Iklan Jawatan</h6>

                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <div id="chartdiv"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0" style="text-align: center">Iklan Jawatan Kosong MAIWP

                        @if (auth()->user()->role == 'pengesah')
                            <a href="/iklanJawatan/create" input type="button" class="btn bg-gradient-default"
                                style="float: right;">Iklan Baru</a>
                        @endif



                    </h5>
                </div>



                <div class="table-responsive">
                    <div
                        class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">
                        <div class="dataTable-top">
                            <div class="dataTable-dropdown"><label>
                                    <select class="dataTable-selector">
                                        <option value="5">5</option>
                                        <option value="10" selected="">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                    </select> entries per page</label>
                            </div>
                            <div class="dataTable-search">
                                <input class="dataTable-input" placeholder="Search..." type="text">
                            </div>
                        </div>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">Jawatan</a></th>
                                        <th class="text-center">Tarikh Mula</a></th>
                                        <th class="text-center">Tarikh Tutup</a></th>
                                        <th class="text-center">Penempatan</a></th>
                                        <th class="text-center">Kekosongan</a></th>
                                        <th class="text-center">Taraf Jawatan</a></th>

                                        @if (auth()->user()->role == 'pemohon')
                                            <th class="text-center">Tindakan</a></th>
                                        @endif

                                        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                            <th class="text-center">Action</a></th>
                                        @endif

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($iklan_jawatan as $iklan_jawatan)
                                        <tr>
                                            <td class="text-center">{{ $iklan_jawatan->jawatan }}</td>
                                            <td class="text-center">{{ $iklan_jawatan->tarikhMula }}</td>
                                            <td class="text-center">{{ $iklan_jawatan->tarikhTutup }}</td>
                                            <td class="text-center">{{ $iklan_jawatan->penempatan }}</td>
                                            <td class="text-center">{{ $iklan_jawatan->kekosongan }}</td>
                                            <td class="text-center">{{ $iklan_jawatan->tarafJawatan }}</td>

                                            @if (auth()->user()->role == 'pemohon')
                                                <td><a class="btn btn-info"
                                                        href="/permohonan/create?jawatan_id={{ $iklan_jawatan->id }}">Mohon</a>
                                                </td>
                                            @endif

                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                <td class="text-center">
                                                    <div>
                                                        <form
                                                            action="{{ route('iklanJawatan.destroy', $iklan_jawatan->id) }}"
                                                            method="POST">

                                                            <a class="btn btn-info"
                                                                href="{{ route('iklanJawatan.show', $iklan_jawatan->id) }}">Show</a>

                                                            <a class="btn btn-primary"
                                                                href="{{ route('iklanJawatan.edit', $iklan_jawatan->id) }}">Edit</a>

                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            @endif


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    <div class="dataTable-bottom">
                        <div class="dataTable-info">Showing 1 to 10 of 57 entries</div>
                        <nav class="dataTable-pagination">
                            <ul class="dataTable-pagination-list">
                                <li class="pager"><a href="#" data-page="1">‹</a></li>
                                <li class="active"><a href="#" data-page="1">1</a></li>
                                <li class=""><a href="#" data-page="2">2</a></li>
                                <li class=""><a href="#" data-page="3">3</a></li>
                                <li class=""><a href="#" data-page="4">4</a></li>
                                <li class=""><a href="#" data-page="5">5</a></li>
                                <li class=""><a href="#" data-page="6">6</a></li>
                                <li class="pager"><a href="#" data-page="2">›</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- Chart code -->
    <script>
        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            var chart = am4core.create("chartdiv", am4charts.XYChart);

            // Create daily series and related axes
            var dateAxis1 = chart.xAxes.push(new am4charts.DateAxis());
            dateAxis1.renderer.grid.template.location = 0;
            dateAxis1.renderer.minGridDistance = 40;

            var valueAxis1 = chart.yAxes.push(new am4charts.ValueAxis());

            var series1 = chart.series.push(new am4charts.ColumnSeries());
            series1.dataFields.valueY = "value";
            series1.dataFields.dateX = "date";
            series1.data = generateDailyData();
            series1.xAxis = dateAxis1;
            series1.yAxis = valueAxis1;
            series1.tooltipText = "{dateX}: [bold]{valueY}[/]";

            // Create hourly series and related axes
            var dateAxis2 = chart.xAxes.push(new am4charts.DateAxis());
            dateAxis2.renderer.grid.template.location = 0;
            dateAxis2.renderer.minGridDistance = 40;
            dateAxis2.renderer.labels.template.disabled = true;
            dateAxis2.renderer.grid.template.disabled = true;
            dateAxis2.renderer.tooltip.disabled = true;

            var valueAxis2 = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis2.renderer.opposite = true;
            valueAxis2.renderer.grid.template.disabled = true;
            valueAxis2.renderer.labels.template.disabled = true;
            valueAxis2.renderer.tooltip.disabled = true;

            var series2 = chart.series.push(new am4charts.LineSeries());
            series2.dataFields.valueY = "value";
            series2.dataFields.dateX = "date";
            series2.data = generateHourlyData();
            series2.xAxis = dateAxis2;
            series2.yAxis = valueAxis2;
            series2.strokeWidth = 3;
            series2.tooltipText = "{dateX.formatDate('yyyy-MM-dd hh:00')}: [bold]{valueY}[/]";

            // Add cursor
            chart.cursor = new am4charts.XYCursor();

            function generateDailyData() {
                var firstDate = new Date();
                firstDate.setDate(firstDate.getDate() - 10);
                firstDate.setHours(0, 0, 0, 0);
                var data = [];
                for (var i = 0; i < 10; i++) {
                    var newDate = new Date(firstDate);
                    newDate.setDate(newDate.getDate() + i);
                    data.push({
                        date: newDate,
                        value: Math.round(Math.random() * 12) + 1
                    });
                }
                return data;
            }

            function generateHourlyData() {
                var firstDate = new Date();
                firstDate.setDate(firstDate.getDate() - 10);
                var data = [];
                for (var i = 0; i < 10 * 24; i++) {
                    var newDate = new Date(firstDate);
                    newDate.setHours(newDate.getHours() + i);

                    if (i == 0) {
                        var value = Math.round(Math.random() * 10) + 1;
                    } else {
                        var value = Math.round(data[data.length - 1].value / 100 * (90 + Math.round(Math.random() *
                            20)) * 100) / 100;
                    }
                    data.push({
                        date: newDate,
                        value: value
                    });
                }
                return data;
            }

        }); // end am4core.ready()
    </script>
@endsection
