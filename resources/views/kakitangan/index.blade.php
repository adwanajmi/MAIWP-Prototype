@extends('base')
@section('content')
    <!-- Styles -->
    <style>
        #chartdiv {
            width: 100%;
            height: 600px;
        }

    </style>


    <div class="col-lg-7 col-md-12">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Statistik Kakitangan</h6>
            </div>
            <div class="card-body p-3">
                <div class="chart">
                    <div id="chartdiv"></div>
                </div>
            </div>
        </div>
    </div>

    <br>



    <div class="card-header pb-0">
        <div class="d-lg-flex">
            <div>
                <h5 class="mb-0">Kakitangan</h5>

            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="/kakitangan/create" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Pendaftaran Baru</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body px-0 pb-0">
        <div class="table-responsive">
            <table class="table table-flush" id="products-list">
                <thead class="thead-light">
                    <tr>
                        <th>Pekerja ID</th>
                        <th>Nama</th>
                        <th>Jawatan</th>
                        <th>Taraf Perkhidmatan</th>
                        <th>Cawangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kakitangan as $kakitangan)
                        <tr>
                            <td class="text-sm">{{ $kakitangan->pekerja_id }}</td>
                            <td class="text-sm">{{ $kakitangan->namaPenuh }}</td>
                            <td class="text-sm">{{ $kakitangan->jawatan }}</td>
                            <td class="text-sm">{{ $kakitangan->tarafPerkhidmatan }}</td>
                            <td class="text-sm">{{ $kakitangan->cawangan }}</td>
                            <td class="text-sm">
                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                    <i class="fas fa-eye text-secondary"></i>
                                </a>
                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit product">
                                    <i class="fas fa-user-edit text-secondary"></i>
                                </a>
                                <form action="{{ route('kakitangan.destroy', $kakitangan->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <i class="fas fa-trash text-secondary"></i>
                                </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

            var chart = am4core.create("chartdiv", am4charts.RadarChart);

            chart.data = [{
                "country": "USA",
                "visits": 2025
            }, {
                "country": "China",
                "visits": 1882
            }, {
                "country": "Japan",
                "visits": 1809
            }, {
                "country": "Germany",
                "visits": 1322
            }, {
                "country": "UK",
                "visits": 1122
            }, {
                "country": "France",
                "visits": 1114
            }, {
                "country": "India",
                "visits": 984
            }, {
                "country": "Spain",
                "visits": 711
            }, {
                "country": "Netherlands",
                "visits": 665
            }, {
                "country": "Russia",
                "visits": 580
            }, {
                "country": "South Korea",
                "visits": 443
            }, {
                "country": "Canada",
                "visits": 441
            }];

            chart.innerRadius = am4core.percent(40)

            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.dataFields.category = "country";
            categoryAxis.renderer.minGridDistance = 60;
            categoryAxis.renderer.inversed = true;
            categoryAxis.renderer.labels.template.location = 0.5;
            categoryAxis.renderer.grid.template.strokeOpacity = 0.08;

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.min = 0;
            valueAxis.extraMax = 0.1;
            valueAxis.renderer.grid.template.strokeOpacity = 0.08;

            chart.seriesContainer.zIndex = -10;


            var series = chart.series.push(new am4charts.RadarColumnSeries());
            series.dataFields.categoryX = "country";
            series.dataFields.valueY = "visits";
            series.tooltipText = "{valueY.value}"
            series.columns.template.strokeOpacity = 0;
            series.columns.template.radarColumn.cornerRadius = 5;
            series.columns.template.radarColumn.innerCornerRadius = 0;

            chart.zoomOutButton.disabled = true;

            // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
            series.columns.template.adapter.add("fill", (fill, target) => {
                return chart.colors.getIndex(target.dataItem.index);
            });

            setInterval(() => {
                am4core.array.each(chart.data, (item) => {
                    item.visits *= Math.random() * 0.5 + 0.5;
                    item.visits += 10;
                })
                chart.invalidateRawData();
            }, 2000)

            categoryAxis.sortBySeries = series;

            chart.cursor = new am4charts.RadarCursor();
            chart.cursor.behavior = "none";
            chart.cursor.lineX.disabled = true;
            chart.cursor.lineY.disabled = true;

        }); // end am4core.ready()
    </script>
@endsection
