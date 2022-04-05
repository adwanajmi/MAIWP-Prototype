@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col">
          <h5 class="mb-0" style="text-align: center">Laporan Tatatertib</h5>
        </div>
        @if (auth()-> user()->role =="admin")

        <div class="col-auto">
            <a class="btn btn-default" href="#!" class="svg-inline--fa fa-pencil-alt fa-w-16 fs--2 me-1" >Ubah</a>
        </div>
        @endif
      </div>
    </div>
    <div class="card-body bg-light border-top">
      <div class="row">
        <div class="col-lg col-xxl-5">
          <h6 class="fw-semi-bold ls mb-3 text-uppercase"> Tatatertib</h6>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1"><b>Nama Pekerja:</b></p>
            </div>
            <div class="col">{{ Auth::user()->name }}</div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1"><b>Jawatan:</b></p>
            </div>
            <div class="col">Pegawai Tadbir</div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1"><b>Tarikh Kes:</b></p>
            </div>
            <div class="col">{{ Auth::user()->created_at }}</a></div>
          </div>
        </div>
        <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
          <h6 class="fw-semi-bold ls mb-3 text-uppercase">Status Kesalahan</h6>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1"><b>Jenis Pelanggaran:</b></p>
            </div>
            <div class="col">Datang Lewat</a></div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1"><b>Jenis Prosedur:</b></p>
            </div>
            <div class="col">
              <p class="mb-1">Tidak log masuk waktu yang ditetapkan</p>
            </div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1"><b>Hukuman:</b></p>
            </div>
            <div class="col">Dalam Perbincangan</a></div>
          </div>

        </div>
      </div>
    </div>
    <div class="card-footer border-top text-end">
        <div class="col-auto">
            <a class="btn btn-default" href="#!" class="svg-inline--fa fa-pencil-alt fa-w-16 fs--2 me-1" >Lihat</a>
        </div>

</div>

@endsection
