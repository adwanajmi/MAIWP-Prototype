@extends('base')
@section('content')
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }

    </style>
    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-7 position-relative z-index-2">
                    <div class="card card-plain mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <h2 class="font-weight-bolder mb-0">Statistik Hari Ini</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-sm-6">
                            <div class="card  mb-4">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <a href="/laporan">
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Laporan</p>
                                                </a>
                                                <h5 class="font-weight-bolder mb-0">
                                                    5,000
                                                    <span class="text-success text-sm font-weight-bolder">+55%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <a href="/perkhidmatan">
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Perkhidmatan
                                                    </p>
                                                </a>
                                                <h5 class="font-weight-bolder mb-0">
                                                    2,300
                                                    <span class="text-success text-sm font-weight-bolder">+3%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 mt-sm-0 mt-4">
                            <div class="card  mb-4">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <a href="/permohonan">
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Permohonan</p>
                                                </a>
                                                <h5 class="font-weight-bolder mb-0">
                                                    +3,462
                                                    <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card ">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <a href="/iklanJawatan">
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Iklan Jawatan
                                                    </p>
                                                </a>
                                                <h5 class="font-weight-bolder mb-0">
                                                    430
                                                    <span class="text-success text-sm font-weight-bolder">+5%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>


            <div class="row mt-4">
                <div class="col-12 col-lg-10">
                    <div class="card ">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">Permohonan dari Negeri</h6>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center ">
                                <tbody>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../../assets/img/kl.png" alt="Negeri flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Negeri:</p>
                                                    <h6 class="text-sm mb-0">Kuala Lumpur</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Pemohon:</p>
                                                <h6 class="text-sm mb-0">2500</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Jumlah:</p>
                                                <h6 class="text-sm mb-0">3,900</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Kenaikkan:</p>
                                                <h6 class="text-sm mb-0">29.9%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../../assets/img/selangor.png" alt="Negeri flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Negeri:</p>
                                                    <h6 class="text-sm mb-0">Selangor</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Pemohon:</p>
                                                <h6 class="text-sm mb-0">3.900</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Jumlah:</p>
                                                <h6 class="text-sm mb-0">2,000</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Kenaikkan:</p>
                                                <h6 class="text-sm mb-0">40.22%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../../assets/img/johor.png" alt="Negeri flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Negeri:</p>
                                                    <h6 class="text-sm mb-0">Johor</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Pemohon:</p>
                                                <h6 class="text-sm mb-0">1.400</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Jumlah:</p>
                                                <h6 class="text-sm mb-0">90,700</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Kenaikkan:</p>
                                                <h6 class="text-sm mb-0">23.44%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../../assets/img/melaka.png" alt="Negeri flag">
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Negeri:</p>
                                                    <h6 class="text-sm mb-0">Melaka</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Pemohon:</p>
                                                <h6 class="text-sm mb-0">562</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Jumlah:</p>
                                                <h6 class="text-sm mb-0">43,960</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Kenaikkan:</p>
                                                <h6 class="text-sm mb-0">32.14%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="card-header bg-light d-flex justify-content-between">
                    <div class="card-body p-3">
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                            <div id="chartdiv"></div>

                        </div>
                        <h6 class="ms-2 mt-4 mb-0"> Pengguna Aktif </h6>
                        <p class="text-sm ms-2"> (<span class="font-weight-bolder">+23%</span>) dari minggu lepas </p>
                        <div class="container border-radius-lg">
                            <div class="row">
                                <div class="col-3 py-3 ps-0">
                                    <div class="d-flex mb-2">
                                        <div
                                            class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>document</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(154.000000, 300.000000)">
                                                                <path class="color-background"
                                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                    opacity="0.603585379"></path>
                                                                <path class="color-background"
                                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <a href="/user">
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">Pengguna</p>
                                        </a>
                                    </div>
                                    <h4 class="font-weight-bolder">3K</h4>
                                    <div class="progress w-75">
                                        <div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 py-3 ps-0">
                                    <div class="d-flex mb-2">
                                        <div
                                            class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>spaceship</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(4.000000, 301.000000)">
                                                                <path class="color-background"
                                                                    d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                </path>
                                                                <path class="color-background"
                                                                    d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                </path>
                                                                <path class="color-background"
                                                                    d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                    opacity="0.598539807"></path>
                                                                <path class="color-background"
                                                                    d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                    opacity="0.598539807"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <a href="/laporan">
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">Laporan</p>
                                        </a>
                                    </div>
                                    <h4 class="font-weight-bolder">20</h4>
                                    <div class="progress w-75">
                                        <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 py-3 ps-0">
                                    <div class="d-flex mb-2">
                                        <div
                                            class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="10px" height="10px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <a href="/permohonan">
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">Pemohon</p>
                                        </a>
                                    </div>
                                    <h4 class="font-weight-bolder">45K</h4>
                                    <div class="progress w-75">
                                        <div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 py-3 ps-0">
                                    <div class="d-flex mb-2">
                                        <div
                                            class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>settings</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(304.000000, 151.000000)">
                                                                <polygon class="color-background" opacity="0.596981957"
                                                                    points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                                </polygon>
                                                                <path class="color-background"
                                                                    d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                    opacity="0.596981957"></path>
                                                                <path class="color-background"
                                                                    d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <a href="/iklanJawatan">
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">Jawatan</p>
                                        </a>
                                    </div>
                                    <h4 class="font-weight-bolder">43</h4>
                                    <div class="progress w-75">
                                        <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endif

    @if (auth()->user()->role == 'pemohon')
        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header p-3 pb-0">
                    <div class="row">
                        <div class="col-8 d-flex">
                            <div>
                                <img src="/assets/img/MAIWPLogo.png" class="avatar avatar-sm me-2" alt="avatar image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Pegawai Tadbir</h6>
                                <p class="text-xs">Kontrak</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <span class="badge bg-gradient-info ms-auto float-end">Jawatan Baru</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pt-1">
                    <h6>Pegawai Tadbir @ MAIWP KL</h6>
                    <p class="text-sm">Kepada yang berminat boleh memohon. Lokasi di KL</p>
                    <div class="d-flex bg-gray-100 border-radius-lg p-3">
                        <h4 class="my-auto">
                            <span class="text-secondary text-sm me-1">RM</span>3,000<span
                                class="text-secondary text-sm ms-1">/ sebulan </span>
                        </h4>
                        <a href="/iklanJawatan" class="btn btn-outline-dark mb-0 ms-auto">Mohon</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header p-3 pb-0">
                    <div class="row">
                        <div class="col-8 d-flex">
                            <div>
                                <img src="/assets/img/MAIWPLogo.png" class="avatar avatar-sm me-2" alt="avatar image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Pegawai Hal Ehwal</h6>
                                <p class="text-xs">Kontrak</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <span class="badge bg-gradient-info ms-auto float-end">Jawatan Baru</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pt-1">
                    <h6>Pegawai Hal Ehwal @ MAIWP KL</h6>
                    <p class="text-sm">Terbuka kepada yang berumur 30 ke atas dan berpengelaman sahaja</p>
                    <div class="d-flex bg-gray-100 border-radius-lg p-3">
                        <h4 class="my-auto">
                            <span class="text-secondary text-sm me-1">RM</span>5,000<span
                                class="text-secondary text-sm ms-1">/ sebulan </span>
                        </h4>
                        <a href="/iklanJawatan" class="btn btn-outline-dark mb-0 ms-auto">Mohon</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header p-3 pb-0">
                    <div class="row">
                        <div class="col-8 d-flex">
                            <div>
                                <img src="/assets/img/MAIWPLogo.png" class="avatar avatar-sm me-2" alt="avatar image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Pegawai Dalam Negeri</h6>
                                <p class="text-xs">Kontrak</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <span class="badge bg-gradient-info ms-auto float-end">Jawatan Baru</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pt-1">
                    <h6>Pegawai Dalam Negeri @ MAIWP KL</h6>
                    <p class="text-sm">Kepada yang berminat boleh memohon. Lokasi di KL</p>
                    <div class="d-flex bg-gray-100 border-radius-lg p-3">
                        <h4 class="my-auto">
                            <span class="text-secondary text-sm me-1">RM</span>2,800<span
                                class="text-secondary text-sm ms-1">/ sebulan </span>
                        </h4>
                        <a href="/iklanJawatan" class="btn btn-outline-dark mb-0 ms-auto">Mohon</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header p-3 pb-0">
                    <div class="row">
                        <div class="col-8 d-flex">
                            <div>
                                <img src="/assets/img/MAIWPLogo.png" class="avatar avatar-sm me-2" alt="avatar image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Pegawai Daerah</h6>
                                <p class="text-xs">Kontrak</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <span class="badge bg-gradient-info ms-auto float-end">Jawatan Baru</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pt-1">
                    <h6>Pegawai Daerah @ MAIWP Selangor</h6>
                    <p class="text-sm">Kepada yang berminat boleh memohon. Lokasi di KL</p>
                    <div class="d-flex bg-gray-100 border-radius-lg p-3">
                        <h4 class="my-auto">
                            <span class="text-secondary text-sm me-1">RM</span>3,800<span
                                class="text-secondary text-sm ms-1">/ sebulan </span>
                        </h4>
                        <a href="/iklanJawatan" class="btn btn-outline-dark mb-0 ms-auto">Mohon</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (auth()->user()->role == 'pekerja')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card widget-calendar h-100">
                                <!-- Card header -->
                                <div class="card-header p-3 pb-0">
                                    <h6 class="mb-0">Kalendar Pekerja</h6>
                                    <div class="d-flex">
                                        <div class="p text-sm font-weight-bold mb-0 widget-calendar-day">Isnin</div>
                                        <span>,&nbsp;</span>
                                        <div class="p text-sm font-weight-bold mb-1 widget-calendar-year">2022</div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body p-3">
                                    <div data-toggle="widget-calendar"
                                        class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                                        <div class="fc-view-harness fc-view-harness-passive">
                                            <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                                <table class="fc-scrollgrid ">
                                                    <thead>
                                                        <tr class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                            <td>
                                                                <div class="fc-scroller-harness">
                                                                    <div class="fc-scroller" style="overflow: visible;">
                                                                        <table class="fc-col-header "
                                                                            style="width: 801px;">
                                                                            <colgroup></colgroup>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-sun">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Sun</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-mon">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Mon</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-tue">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Tue</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-wed">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Wed</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-thu">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Thu</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-fri">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Fri</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th
                                                                                        class="fc-col-header-cell fc-day fc-day-sat">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a
                                                                                                class="fc-col-header-cell-cushion ">Sat</a>
                                                                                        </div>
                                                                                    </th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="fc-scrollgrid-section fc-scrollgrid-section-body ">
                                                            <td>
                                                                <div class="fc-scroller-harness">
                                                                    <div class="fc-scroller" style="overflow: visible;">
                                                                        <div class="fc-daygrid-body fc-daygrid-body-unbalanced fc-daygrid-body-natural"
                                                                            style="width: 801px;">
                                                                            <table class="fc-scrollgrid-sync-table"
                                                                                style="width: 801px;">
                                                                                <colgroup></colgroup>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                                            data-date="2020-11-29">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">29</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-success">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Cuti
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                                            data-date="2020-11-30">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">30</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-12-01">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">1</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-info">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Mesyuarat
                                                                                                                            Besar
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-12-02">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">2</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-warning">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Sukan
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-12-03">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">3</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-danger">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Hari
                                                                                                                            Pekerja
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                            data-date="2020-12-04">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">4</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                            data-date="2020-12-05">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">5</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                            data-date="2020-12-06">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">6</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                            data-date="2020-12-07">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">7</a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-events"
                                                                                                    style="padding-bottom: 29.1484px;">
                                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                        style="right: -114.422px;">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-warning">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Kuarantine
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-12-08">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">8</a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-events"
                                                                                                    style="padding-bottom: 29.1484px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-12-09">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">9</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-12-10">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">10</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-primary">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Pesta
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                            data-date="2020-12-11">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">11</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                            data-date="2020-12-12">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">12</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                            data-date="2020-12-13">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">13</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                            data-date="2020-12-14">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">14</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-12-15">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">15</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-12-16">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">16</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-12-17">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">17</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                            data-date="2020-12-18">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">18</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                            data-date="2020-12-19">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">19</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-danger">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Dinner
                                                                                                                            with
                                                                                                                            Family
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                            data-date="2020-12-20">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">20</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                            data-date="2020-12-21">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">21</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-12-22">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">22</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-12-23">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">23</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div
                                                                                                        class="fc-daygrid-event-harness">
                                                                                                        <a
                                                                                                            class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-info">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Cuti
                                                                                                                            Selangor
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-12-24">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">24</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                            data-date="2020-12-25">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">25</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                            data-date="2020-12-26">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">26</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                            data-date="2020-12-27">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">27</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                            data-date="2020-12-28">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">28</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                            data-date="2020-12-29">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">29</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                            data-date="2020-12-30">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">30</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                            data-date="2020-12-31">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">31</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past fc-day-other"
                                                                                            data-date="2021-01-01">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">1</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past fc-day-other"
                                                                                            data-date="2021-01-02">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">2</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                                            data-date="2021-01-03">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">3</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                                            data-date="2021-01-04">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">4</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other"
                                                                                            data-date="2021-01-05">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">5</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other"
                                                                                            data-date="2021-01-06">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">6</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past fc-day-other"
                                                                                            data-date="2021-01-07">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">7</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past fc-day-other"
                                                                                            data-date="2021-01-08">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">8</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past fc-day-other"
                                                                                            data-date="2021-01-09">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a
                                                                                                        class="fc-daygrid-day-number">9</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card p-3">
                                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                                    style="background-image: url('../../assets/img/ivancik.jpg');">
                                    <span class="mask bg-gradient-dark"></span>
                                    <div class="card-body position-relative z-index-1 h-100 p-3">
                                        <h6 class="text-white font-weight-bolder mb-3">Hey {{ $user->name }},</h6>
                                        <p class="text-white mb-3">Sistem Aplikasi dalaman MAIWP hanya boleh di akses di
                                            pejabat sahaja.</p>
                                        <a class="btn btn-round btn-outline-white mb-0" href="/">
                                            Baca
                                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="card mt-4">
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Kategori</h6>
                                </div>
                                <div class="card-body p-3">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                        <title>spaceship</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-1720.000000, -592.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(4.000000, 301.000000)">
                                                                        <path
                                                                            d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                        </path>
                                                                        <path
                                                                            d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                        </path>
                                                                        <path
                                                                            d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                            opacity="0.598539807"></path>
                                                                        <path
                                                                            d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                            opacity="0.598539807"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Latihan</h6>
                                                    <span class="text-xs">50 Latihan, <span
                                                            class="font-weight-bold">200 Dibuat</span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                        <title>settings</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-2020.000000, -442.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(304.000000, 151.000000)">
                                                                        <polygon opacity="0.596981957"
                                                                            points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                                        </polygon>
                                                                        <path
                                                                            d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                            opacity="0.596981957"></path>
                                                                        <path
                                                                            d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Mesyuarat</h6>
                                                    <span class="text-xs">1 Mesyuarat<span
                                                            class="font-weight-bold"></span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                        <title>box-3d-50</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-2319.000000, -291.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(603.000000, 0.000000)">
                                                                        <path
                                                                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                        </path>
                                                                        <path
                                                                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                            opacity="0.7"></path>
                                                                        <path
                                                                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                            opacity="0.7"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Mohon Cuti</h6>
                                                    <a href="/cuti" class="text-xs">1 is active, <span
                                                            class="font-weight-bold">40 closed</span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Latihan</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                    <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                    <small>23 - 30 Mac 2022</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 justify-content-between ps-0 pb-0 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down" aria-hidden="true"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Latihan Pengurusan Duit</h6>
                                                <span class="text-xs">27 Mac 2020, at 12:30 PM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold ms-auto">
                                            59%
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-2">
                                </li>
                                <li class="list-group-item border-0 justify-content-between ps-0 pb-0 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-up" aria-hidden="true"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Latihan Keusahawan</h6>
                                                <span class="text-xs">23 Mac 2020, at 04:30 AM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto">
                                            100%
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-2">
                                </li>
                                <li class="list-group-item border-0 justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-up" aria-hidden="true"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Latihan Pekerja</h6>
                                                <span class="text-xs">19 Mac 2020, at 02:50 AM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto">
                                            100%
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-sm-0 mt-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Notifikasi</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                    <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                    <small>01 - 07 Dec 2021</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 justify-content-between ps-0 pb-0 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-up" aria-hidden="true"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">via Maybank</h6>
                                                <span class="text-xs">07 June 2021, at 09:00 AM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto">
                                            + RM 3,999
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-2">
                                </li>
                                <li class="list-group-item border-0 justify-content-between ps-0 pb-0 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-up" aria-hidden="true"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Partner #90211</h6>
                                                <span class="text-xs">07 June 2021, at 05:50 AM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto">
                                            + RM 70
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-2">
                                </li>
                                <li class="list-group-item border-0 justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down" aria-hidden="true"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Servis</h6>
                                                <span class="text-xs">07 June 2021, at 07:10 PM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold ms-auto">
                                            - RM 800
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (auth()->user()->role == 'panel')
        <div class="card card-plain mb-4">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                            <h2 class="font-weight-bolder mb-0">Selamat Datang, {{ Auth()->user()->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <div class="card  mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Temuduga Baru</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        3,000
                                        <span class="text-success text-sm font-weight-bolder">5%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Permohonan Baru</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        2,300
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-6 mt-sm-0 mt-4">
                <div class="card  mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Pemohon Baru</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        +3,462
                                        <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jawatan Baru</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        430
                                        <span class="text-success text-sm font-weight-bolder">+5%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

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

            /**
             * Chart design taken from Samsung health app
             */

            var chart = am4core.create("chartdiv", am4charts.XYChart);
            chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

            chart.paddingBottom = 30;

            chart.data = [{
                "name": "Pengguna",
                "steps": 45688,
                "href": "https://www.amcharts.com/wp-content/uploads/2019/04/monica.jpg"
            }, {
                "name": "Laporan",
                "steps": 35781,
                "href": "https://www.amcharts.com/wp-content/uploads/2019/04/joey.jpg"
            }, {
                "name": "Pemohon",
                "steps": 25464,
                "href": "https://www.amcharts.com/wp-content/uploads/2019/04/ross.jpg"
            }, {
                "name": "Iklan Jawatans",
                "steps": 18788,
                "href": "https://www.amcharts.com/wp-content/uploads/2019/04/phoebe.jpg"
            }, {
                "name": "Temuduga",
                "steps": 11561,
                "href": "https://www.amcharts.com/wp-content/uploads/2019/04/chandler.jpg"
            }];

            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "name";
            categoryAxis.renderer.grid.template.strokeOpacity = 0;
            categoryAxis.renderer.minGridDistance = 10;
            categoryAxis.renderer.labels.template.dy = 35;
            categoryAxis.renderer.tooltip.dy = 35;

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.inside = true;
            valueAxis.renderer.labels.template.fillOpacity = 0.3;
            valueAxis.renderer.grid.template.strokeOpacity = 0;
            valueAxis.min = 0;
            valueAxis.cursorTooltipEnabled = false;
            valueAxis.renderer.baseGrid.strokeOpacity = 0;

            var series = chart.series.push(new am4charts.ColumnSeries);
            series.dataFields.valueY = "steps";
            series.dataFields.categoryX = "name";
            series.tooltipText = "{valueY.value}";
            series.tooltip.pointerOrientation = "vertical";
            series.tooltip.dy = -6;
            series.columnsContainer.zIndex = 100;

            var columnTemplate = series.columns.template;
            columnTemplate.width = am4core.percent(50);
            columnTemplate.maxWidth = 66;
            columnTemplate.column.cornerRadius(60, 60, 10, 10);
            columnTemplate.strokeOpacity = 0;

            series.heatRules.push({
                target: columnTemplate,
                property: "fill",
                dataField: "valueY",
                min: am4core.color("#e5dc36"),
                max: am4core.color("#5faa46")
            });
            series.mainContainer.mask = undefined;

            var cursor = new am4charts.XYCursor();
            chart.cursor = cursor;
            cursor.lineX.disabled = true;
            cursor.lineY.disabled = true;
            cursor.behavior = "none";

            var bullet = columnTemplate.createChild(am4charts.CircleBullet);
            bullet.circle.radius = 30;
            bullet.valign = "bottom";
            bullet.align = "center";
            bullet.isMeasured = true;
            bullet.mouseEnabled = false;
            bullet.verticalCenter = "bottom";
            bullet.interactionsEnabled = false;

            var hoverState = bullet.states.create("hover");
            var outlineCircle = bullet.createChild(am4core.Circle);
            outlineCircle.adapter.add("radius", function(radius, target) {
                var circleBullet = target.parent;
                return circleBullet.circle.pixelRadius + 10;
            })

            var image = bullet.createChild(am4core.Image);
            image.width = 60;
            image.height = 60;
            image.horizontalCenter = "middle";
            image.verticalCenter = "middle";
            image.propertyFields.href = "href";

            image.adapter.add("mask", function(mask, target) {
                var circleBullet = target.parent;
                return circleBullet.circle;
            })

            var previousBullet;
            chart.cursor.events.on("cursorpositionchanged", function(event) {
                var dataItem = series.tooltipDataItem;

                if (dataItem.column) {
                    var bullet = dataItem.column.children.getIndex(1);

                    if (previousBullet && previousBullet != bullet) {
                        previousBullet.isHover = false;
                    }

                    if (previousBullet != bullet) {

                        var hs = bullet.states.getKey("hover");
                        hs.properties.dy = -bullet.parent.pixelHeight + 30;
                        bullet.isHover = true;

                        previousBullet = bullet;
                    }
                }
            })

        }); // end am4core.ready()
    </script>
@endsection
