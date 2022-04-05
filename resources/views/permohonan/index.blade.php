@extends('base')
@section('content')

    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }

    </style>

    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
        <div class="card h-md-100 ecommerce-card-min-width">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0" style="text-align: center">Statistik Permohonan</h6>

                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <div id="chartdiv"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->

                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                        <div class="card-header">
                            <h5 class="mb-0" style="text-align: center">Permohonan Pemohon</h5>
                        </div>
                    @endif

                    @if (auth()->user()->role == 'pemohon')
                        <div class="card-header">
                            <h5 class="mb-0">Sejarah Permohonan</h5>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <div
                            class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">
                            <div class="dataTable-top">

                            </div>
                            <div class="dataTable-container" style="height: 500.633px;">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">PEMOHON</th>
                                            <th class="text-center">JAWATAN</th>
                                            <th class="text-center">NEGERI</th>
                                            <th class="text-center">WARGANEGARA</th>
                                            <th class="text-center">AKADEMIK</th>
                                            <th class="text-center">STATUS</th>

                                            @if (auth()->user()->role == 'panel' || auth()->user()->role == 'pemohon')
                                                <th class="text-center">PROSES</a></th>
                                            @endif


                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                <th class="text-center">ACTION</a></th>
                                            @endif

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permohonan as $permohonan)
                                            <tr>
                                                <td class="text-sm font-weight-normal">{{ $permohonan->pemohon->name }}
                                                </td>
                                                <td class="text-sm font-weight-normal">{{ $permohonan->jawatan->jawatan }}
                                                </td>
                                                <td class="text-sm font-weight-normal">{{ $permohonan->negeriAsal }}</td>
                                                <td class="text-sm font-weight-normal">{{ $permohonan->warganegara }}</td>
                                                <td class="text-sm font-weight-normal">{{ $permohonan->akademik }}</td>

                                                <td class="text-sm font-weight-normal">{{ $permohonan->status }}</td>

                                                @if (auth()->user()->role == 'pemohon' || auth()->user()->role == 'pengesah')
                                                    <td>
                                                        @if ($permohonan->lulus == null)
                                                            <span class="badge badge-warning badge-sm">Dalam Semakan</span>
                                                        @elseif($permohonan->lulus == 1)
                                                            <span class="badge badge-success badge-sm">Lulus</span>
                                                        @elseif($permohonan->lulus == 0)
                                                            <span class="badge badge-danger badge-sm">Ditolak</span>
                                                        @endif
                                                    </td>
                                                @endif

                                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                    <td class="text-sm font-weight-normal">
                                                        @if ($permohonan->lulus == 1)
                                                            <span class="badge badge-success badge-sm">Lulus</span>
                                                        @elseif ($permohonan->lulus == null)
                                                            <div>
                                                                <a
                                                                    href="{{ route('permohonan.lulus', $permohonan->id) }}">
                                                                    <button type="button"
                                                                        class="btn btn-success">Lulus</button>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a
                                                                    href="{{ route('permohonan.ditolak', $permohonan->id) }}">
                                                                    <button type="button"
                                                                        class="btn btn-warning">Tolak</button>
                                                                </a>
                                                            </div>
                                                        @else
                                                            <span class="badge badge-danger badge-sm">Ditolak</span>
                                                        @endif
                                                    </td>
                                                @endif

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endif

    @if (auth()->user()->role == 'pemohon')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="row col-lg-12" style="width: auto;">
                                <div class="col-lg-3 d-none d-lg-inline-block">
                                    <style>
                                        .steps ul {
                                            float: left;
                                            width: 100%;
                                            flex-direction: column;
                                            position: relative;
                                            padding-left: 0px;
                                            padding-top: 30px;
                                            list-style-type: none;
                                            display: -webkit-flex;
                                            -moz-flex-direction: column;
                                            -webkit-flex-direction: column;
                                            -o-flex-direction: column;
                                            -ms-flex-direction: column;
                                        }

                                        .steps ul li {
                                            padding-bottom: 20px;
                                            position: relative;
                                            z-index: 99;
                                        }

                                        .steps ul li a {
                                            text-decoration: none;
                                            color: #222;
                                        }

                                        .title {
                                            align-items: center;
                                            display: -webkit-flex;
                                            -moz-align-items: center;
                                            -webkit-align-items: center;
                                            -o-align-items: center;
                                            -ms-align-items: center;
                                        }

                                        .current .title .step-number {
                                            background: #6a5db6;
                                            color: #fff;
                                        }

                                        .current .title .step-text {
                                            color: #6a5db6;
                                        }

                                        .title .step-number {
                                            width: 45px;
                                            height: 45px;
                                            align-items: center;
                                            -moz-align-items: center;
                                            -webkit-align-items: center;
                                            -o-align-items: center;
                                            -ms-align-items: center;
                                            justify-content: center;
                                            -moz-justify-content: center;
                                            -webkit-justify-content: center;
                                            -o-justify-content: center;
                                            -ms-justify-content: center;
                                            border-radius: 50%;
                                            -moz-border-radius: 50%;
                                            -webkit-border-radius: 50%;
                                            -o-border-radius: 50%;
                                            -ms-border-radius: 50%;
                                            background: #888;
                                            color: #fff;
                                            margin-right: 15px;
                                            border: 5px solid #fff;
                                            font-weight: bold;
                                            display: -webkit-flex;
                                            font-size: 14px;
                                            line-height: 1.6;
                                            font-weight: bold;
                                        }

                                        .title .step-text {
                                            font-weight: bold;
                                            color: #999;
                                        }

                                        .title:hover>.step-number {
                                            color: #fff;
                                            background: #6a5db6;
                                        }

                                        .title:hover>.step-text {
                                            color: #6a5db6;
                                        }

                                        .steps ul:after {
                                            position: absolute;
                                            content: '';
                                            width: 2px;
                                            height: 70%;
                                            background: #888;
                                            left: 22px;
                                            top: 54%;
                                            transform: translateY(-50%);
                                            -moz-transform: translateY(-50%);
                                            -webkit-transform: translateY(-50%);
                                            -o-transform: translateY(-50%);
                                            -ms-transform: translateY(-50%);
                                            z-index: 9;
                                        }

                                    </style>

                                    <div class="steps clearfix">
                                        <ul role="tablist">
                                            <li role="tab" class="current">
                                                <a href="javascript:;" onclick="daftarMohon()">
                                                    <span class="current-info audible"> </span>
                                                    <div class="title">
                                                        <span class="step-number">1</span>
                                                        <span class="step-text">Permohonan Yang Telah
                                                            Didaftarkan</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role="tab" class="">
                                                <a href="javascript:;" onclick="semasaMohon()">
                                                    <div class="title">
                                                        <span class="step-number">2</span>
                                                        <span class="step-text">Status Permohonan Semasa</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            $('li[role=tab]').click(function() {
                                                $('.current').removeClass('current');
                                                $(this).attr("class", "current");
                                            });
                                        });
                                    </script>

                                </div>

                                <div class="col-lg-9">
                                    <div id="daftarMohon" class="daftarMohon" style="display: block;">
                                        <h4 class="mt-0 header-title">PERMOHONAN YANG TELAH DIDAFTARKAN</h4>
                                        <div class="alert alert-info text-white border-0 font-13" role="alert">
                                            <strong>Nota:</strong>
                                            <br>

                                            <ol>
                                                <li>Jumlah <b>maksimum</b> jawatan yang boleh didaftarkan adalah <b>10
                                                        jawatan sahaja.</li>
                                                <li>Tempoh sah laku pendaftaran adalah selama <b>satu (1) tahun dari tarikh
                                                        pemohon menghantar. </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>PEMOHON</th>
                                                <th>JAWATAN</th>
                                                <th>AKADEMIK</th>
                                                <th>TARIKH DAFTAR</th>
                                                <th>STATUS</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permohonan as $permohonan)
                                                <tr>
                                                    <td class="text-sm font-weight-normal" align="center">
                                                        {{ $permohonan->pemohon->name }}</td>
                                                    <td class="text-sm font-weight-normal">
                                                        {{ $permohonan->jawatan->jawatan }}</td>
                                                    <td class="text-sm font-weight-normal" align="center">
                                                        {{ $permohonan->akademik }}</td>
                                                    <td class="text-sm font-weight-normal">{{ $permohonan->created_at }}
                                                    </td>

                                                    <td align="center">

                                                        @if ($permohonan->lulus === null)
                                                            <span class="badge badge-warning badge-sm">Dalam Semakan</span>
                                                        @elseif($permohonan->lulus === 1)
                                                            <span class="badge badge-success badge-sm">Lulus</span>
                                                        @elseif($permohonan->lulus === 0)
                                                            <span class="badge badge-danger badge-sm">Ditolak</span>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div> <!-- card-body -->
        </div> <!-- card mb20 -->
        </div> <!-- col-12 -->
        </div> <!-- row -->
        </div>
    @endif

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
                "name": "Pegawai Tadbir",
                "points": 35654,
                "color": chart.colors.next(),
                "bullet": "https://www.amcharts.com/lib/images/faces/A04.png"
            }, {
                "name": "Pegawai Hal Ehwal",
                "points": 65456,
                "color": chart.colors.next(),
                "bullet": "https://www.amcharts.com/lib/images/faces/C02.png"
            }, {
                "name": "Pembantu Hal Ehwal",
                "points": 45724,
                "color": chart.colors.next(),
                "bullet": "https://www.amcharts.com/lib/images/faces/D02.png"
            }];

            // Create axes
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "name";
            categoryAxis.renderer.grid.template.disabled = true;
            categoryAxis.renderer.minGridDistance = 30;
            categoryAxis.renderer.inside = true;
            categoryAxis.renderer.labels.template.fill = am4core.color("#fff");
            categoryAxis.renderer.labels.template.fontSize = 20;

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.grid.template.strokeDasharray = "4,4";
            valueAxis.renderer.labels.template.disabled = true;
            valueAxis.min = 0;

            // Do not crop bullets
            chart.maskBullets = false;

            // Remove padding
            chart.paddingBottom = 0;

            // Create series
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.valueY = "points";
            series.dataFields.categoryX = "name";
            series.columns.template.propertyFields.fill = "color";
            series.columns.template.propertyFields.stroke = "color";
            series.columns.template.column.cornerRadiusTopLeft = 15;
            series.columns.template.column.cornerRadiusTopRight = 15;
            series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/b]";

            // Add bullets
            var bullet = series.bullets.push(new am4charts.Bullet());
            var image = bullet.createChild(am4core.Image);
            image.horizontalCenter = "middle";
            image.verticalCenter = "bottom";
            image.dy = 20;
            image.y = am4core.percent(100);
            image.propertyFields.href = "bullet";
            image.tooltipText = series.columns.template.tooltipText;
            image.propertyFields.fill = "color";
            image.filters.push(new am4core.DropShadowFilter());

        }); // end am4core.ready()
    </script>

@endsection
