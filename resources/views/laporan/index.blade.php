@extends('base')
@section('content')
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
                    <h6 class="mb-0">Perincian Laporan</h6>
                    <div class="d-flex align-items-center">
                        <span class="badge badge-md badge-dot me-4">
                            <i class="bg-primary"></i>
                            <span class="text-dark text-xs">Organic search</span>
                        </span>
                        <span class="badge badge-md badge-dot me-4">
                            <i class="bg-dark"></i>
                            <span class="text-dark text-xs">Referral</span>
                        </span>
                        <span class="badge badge-md badge-dot me-4">
                            <i class="bg-info"></i>
                            <span class="text-dark text-xs">Social media</span>
                        </span>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="card-body fs--1">
    </div>

    <div class="card h-md-100 ecommerce-card-min-width">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Laporan</h5>
                </div>
                <div class="col-auto ms-auto">
                    <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="/laporan/create"><span
                                class="fas fa-pencil-alt fs--2 me-1"></span>Create New</a></div>

                </div>
            </div>
        </div>
        <div class="table-responsive scrollbar">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="text-center">Tajuk</th>
                        <th class="text-center">Detail Laporan</th>
                        <th class="text-center">Jenis Laporan</th>
                        <th class="text-center">Tarikh</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporan as $laporan)
                        <tr>
                            <td class="text-center">{{ $laporan->tajukLaporan }}</td>
                            <td class="text-center">{{ $laporan->detailLaporan }}</td>
                            <td class="text-center">{{ $laporan->jenisLaporan }}</td>
                            <td class="text-center">{{ $laporan->tarikh }}</td>

                            <td class="text-end">
                                <div>
                                    <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST">

                                        <a class="btn btn-info"
                                            href="{{ route('laporan.show', $laporan->id) }}">Show</a>

                                        <a class="btn btn-primary"
                                            href="{{ route('laporan.edit', $laporan->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span
                class="fas fa-chevron-left"></span></button>
        <ul class="pagination mb-0"></ul>
        <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span
                class="fas fa-chevron-right"> </span></button>
    </div>

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

            // Add data
            chart.data = [{
                "country": "Gaji",
                "visits": 700
            }, {
                "country": "Pekerja ",
                "visits": 580
            }, {
                "country": "Permohonan",
                "visits": 443
            }, ];

            // Create axes

            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "country";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;

            categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
                if (target.dataItem && target.dataItem.index & 2 == 2) {
                    return dy + 25;
                }
                return dy;
            });

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

            // Create series
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.valueY = "visits";
            series.dataFields.categoryX = "country";
            series.name = "Visits";
            series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
            series.columns.template.fillOpacity = .8;

            var columnTemplate = series.columns.template;
            columnTemplate.strokeWidth = 2;
            columnTemplate.strokeOpacity = 1;

        }); // end am4core.ready()
    </script>
@endsection
