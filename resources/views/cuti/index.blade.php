@extends('base')
@section('content')

    @if (auth()->user()->role == 'admin')
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->

                    <div class="text-center">
                        <h5 class="alert alert-info" style="color: #fff">Permohonan Cuti Pekerja</h5>
                    </div>

                    <div class="table-responsive">
                        <div
                            class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">
                            <div class="dataTable-top">

                            </div>
                            <div class="dataTable-container" style="height: 500.633px;">
                                <table class="table table-flush dataTable-table" id="datatable-search">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">Pekerja</a>
                                            </th>
                                            <th class="text-center">Jenis Cuti</a>
                                            </th>
                                            <th class="text-center">Pindaan Cuti</a>
                                            </th>
                                            <th class="text-center">Cuti Tanpa Gaji</a>
                                            </th>


                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                <th class="text-center">Action</a></th>
                                            @endif

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cuti as $cuti)
                                            <tr>
                                                <td class="text-center">{{ $cuti->user->name }}
                                                </td>
                                                <td class="text-center">{{ $cuti->jenisCuti }}</td>
                                                <td class="text-center">{{ $cuti->pindaanCuti }}</td>
                                                <td class="text-center">{{ $cuti->cutiTanpaGaji }}</td>
                                                @if (auth()->user()->role == 'pemohon' || auth()->user()->role == 'pengesah')
                                                    <td>
                                                        @if ($cuti->lulus == null)
                                                            <span class="badge badge-warning badge-sm">Dalam Semakan</span>
                                                        @elseif($cuti->lulus == 1)
                                                            <span class="badge badge-success badge-sm">Lulus</span>
                                                        @elseif($cuti->lulus == 0)
                                                            <span class="badge badge-danger badge-sm">Ditolak</span>
                                                        @endif
                                                    </td>
                                                @endif

                                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                    <td class="text-center">
                                                        @if ($cuti->lulus == 1)
                                                            <span class="badge badge-success badge-sm">Lulus</span>
                                                        @elseif ($cuti->lulus == null)
                                                            <div>
                                                                <a href="{{ route('cuti.lulus', $cuti->id) }}">
                                                                    <button type="button"
                                                                        class="btn btn-success">Lulus</button>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="{{ route('cuti.ditolak', $cuti->id) }}">
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



    @if (auth()->user()->role == 'pekerja')
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
                                        <div>
                                            <a class="btn btn-falcon-default btn-sm" href="/cuti/create">
                                                <span class="fas fa-pencil-alt fs--2 me-1"></span>Mohon Baru
                                            </a>
                                        </div>
                                        <ul role="tablist">
                                            <li role="tab" class="current">
                                                <a href="javascript:;" onclick="daftarMohon()">
                                                    <span class="current-info audible"> </span>
                                                    <div class="title">
                                                        <span class="step-number">1</span>
                                                        <span class="step-text">Cuti Yang Telah
                                                            Didaftarkan</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role="tab" class="">
                                                <a href="javascript:;" onclick="semasaMohon()">
                                                    <div class="title">
                                                        <span class="step-number">2</span>
                                                        <span class="step-text">Status Cuti</span>
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
                                        <h4 class="mt-0 header-title">CUTI YANG TELAH DIMOHON</h4>

                                        <div class="alert alert-success" role="alert">
                                            <strong>Nota:</strong>
                                            <br>

                                            <ol>
                                                <li>Jumlah <b>maksimum</b> cuti yang boleh didaftarkan adalah <b>10
                                                        sahaja.</li>
                                                <li>Tempoh sah cuti adalah selama <b>satu (1) minggu dari tarikh
                                                        pekerja memohon. </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>PEMOHON</th>
                                                <th>JENIS CUTI</th>
                                                <th>PINDAAN CUTI</th>
                                                <th>CUTI TANPA GAJI</th>
                                                <th>STATUS</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cuti as $cuti)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $cuti->user->name }}</td>
                                                    <td class="text-center" align="center">
                                                        {{ $cuti->jenisCuti }}</td>
                                                    <td class="text-center" align="center">
                                                        {{ $cuti->pindaanCuti }}</td>
                                                    <td class="text-center" align="center">
                                                        {{ $cuti->pindaanCuti }}
                                                    </td>

                                                    <td align="center">

                                                        @if ($cuti->lulus === null)
                                                            <span class="badge badge-warning badge-sm">Dalam Semakan</span>
                                                        @elseif($cuti->lulus === 1)
                                                            <span class="badge badge-success badge-sm">Lulus</span>
                                                        @elseif($cuti->lulus === 0)
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


@endsection
