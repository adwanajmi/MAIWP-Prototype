@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col">
          <h5 class="mb-0">Mohon Jawatan</h5>
        </div>
        <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="/iklanJawatan/{{ $iklan_jawatan->id }}/edit"><span class="fas fa-pencil-alt fs--2 me-1"></span>Mohon</a></div>
      </div>
    </div>
    <div class="card-body bg-light border-top">

      <div class="row">
        <div class="col-lg col-xxl-5">
          <h6 class="fw-semi-bold ls mb-3 text-uppercase">Informasi Jawatan</h6>

          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Jawatan:</p>
            </div>
          </div>

            <div class="col">{{ $iklan_jawatan->jawatan }}</div>

          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Penempatan:</p>
            </div>
          </div>

            <div class="col">{{ $iklan_jawatan->penempatan }}</div>

          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Taraf Jawatan:</p>
            </div>
          </div>

            <div class="col">{{ $iklan_jawatan->tarafJawatan }}</div>


        </div>

      </div>
    </div>
  </div>


@endsection
