@extends('base')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card"
                            style="background-image: url('../../../assets/img/curved-images/white-curved.jpeg')">
                            <span class="mask bg-gradient-dark opacity-9 border-radius-xl"></span>
                            <div class="card-body p-3 position-relative">
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                            <i class="ni ni-circle-08 text-dark text-gradient text-lg opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                            {{ Auth::user()->name }}
                                        </h5>
                                        <br>

                                        <span class="text-white text-sm">Pekerja</span>
                                    </div>
                                    <div class="col-4">
                                        <div class="dropdown text-end mb-6">
                                            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h text-white" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                                </li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
                        <div class="card"
                            style="background-image: url('../../../assets/img/curved-images/white-curved.jpeg')">
                            <span class="mask bg-gradient-dark opacity-9 border-radius-xl"></span>
                            <div class="card-body p-3 position-relative">
                                <div class="row">
                                    <div class="col-8 text-start">

                                        <div style="display: flex; flex-wrap:nowrap">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div
                                                        class="icon icon-shape bg-white shadow text-center border-radius-md">
                                                        <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10"
                                                            aria-hidden="true"></i>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <h6 class="text-white font-weight-bolder mt-3"
                                                    style="float: right; margin:auto;">
                                                    Hadir
                                                </h6>
                                            </div>
                                        </div>

                                        <br>

                                        <div style="display: flex; flex-wrap:nowrap">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div
                                                        class="icon icon-shape bg-white shadow text-center border-radius-md">
                                                        <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <h6 class="text-white font-weight-bolder mt-3"
                                                    style="float: right; margin:auto;">
                                                    Tidak Hadir
                                                </h6>
                                            </div>
                                        </div>

                                        <br>

                                        <div style="display: flex; flex-wrap:nowrap">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div
                                                        class="icon icon-shape bg-white shadow text-center border-radius-md">
                                                        <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <h6 class="text-white font-weight-bolder mt-3"
                                                    style="float: right; margin:auto;">
                                                    Lewat
                                                </h6>
                                            </div>
                                        </div>
                                        <br>

                                        <div style="display: flex; flex-wrap:nowrap">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div
                                                        class="icon icon-shape bg-white shadow text-center border-radius-md">
                                                        <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <h6 class="text-white font-weight-bolder mt-3"
                                                    style="float: right; margin:auto;">
                                                    Balik Awal
                                                </h6>
                                            </div>
                                        </div>

                                        <span class="text-white text-sm"></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Kehadiran</h6>
                    </div>
                    <div class="card-body pb-0 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                                <div class="w-100">
                                    <div class="d-flex mb-2">
                                        <span class="me-2 text-sm font-weight-bold text-capitalize">Hadir</span>
                                        <span class="ms-auto text-sm font-weight-bold">80%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-info w-80" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                                <div class="w-100">
                                    <div class="d-flex mb-2">
                                        <span class="me-2 text-sm font-weight-bold text-capitalize">Tidak Hadir</span>
                                        <span class="ms-auto text-sm font-weight-bold">10%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-info w-10" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex mb-2">
                                        <span class="me-2 text-sm font-weight-bold text-capitalize">Lewat Hadir</span>
                                        <span class="ms-auto text-sm font-weight-bold">5%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-danger w-5" role="progressbar"
                                                aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                                <div class="w-100">
                                    <div class="d-flex mb-2">
                                        <span class="me-2 text-sm font-weight-bold text-capitalize">Balik Awal</span>
                                        <span class="ms-auto text-sm font-weight-bold">0%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-info w-0" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Jawatan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Kehadiran</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Emel</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ Auth::user()->name }}
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm text-secondary mb-0">Pekerja</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-dot me-4">
                                            <span class="text-dark text-xs">80%</span>
                                        </span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-secondary mb-0 text-sm">muhammad@salam.com</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-sm">43431</span>
                                    </td>
                                </tr>
                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Kamarul Zaman
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm text-secondary mb-0">Pekerja</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <span class="text-dark text-xs">100%</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-secondary mb-0 text-sm">muhammad@kamarul.com</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-sm">43231</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Irfan Affandis
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm text-secondary mb-0">Pegawai Tadbir</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <span class="text-dark text-xs">70%</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-secondary mb-0 text-sm">muhammad@irfans.com</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-sm">12321</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Ah Coi Cina
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm text-secondary mb-0">Pekerja</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <span class="text-dark text-xs">100%</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-secondary mb-0 text-sm">ah@coi.com</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-sm">31231</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Azam Baki
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm text-secondary mb-0">Pekerja</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <span class="text-dark text-xs">90%</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-secondary mb-0 text-sm">muhammad@azam.com</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-sm">12132</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Shahmer Izz
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm text-secondary mb-0">Pekerja</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <span class="text-dark text-xs">50%</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-secondary mb-0 text-sm">muhammad@shahmer.com</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-sm">12312</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Mus Khai
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm text-secondary mb-0">Pekerja</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <span class="text-dark text-xs">10%</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-secondary mb-0 text-sm">mus@salam.com</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-sm">41212</span>
                                        </td>
                                @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
