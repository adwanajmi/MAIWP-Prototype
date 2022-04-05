@extends('base')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="mb-0">Temuduga</h5>
                </div>
                <div class="col-auto"><a class="btn btn-falcon-default btn-sm"
                        href="/temuduga/{{ $temuduga->id }}/edit"><span
                            class="fas fa-pencil-alt fs--2 me-1"></span>Update</a></div>
            </div>
        </div>
        <div class="card-body bg-light border-top">

            <div class="row">
                <div class="col-lg col-xxl-5">
                    <h6 class="fw-semi-bold ls mb-3 text-uppercase">Temuduga</h6>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Nama Pemohon:</p>
                        </div>
                        <div class="col">{{ $temuduga->pemohon_id }}</div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Panel:</p>
                        </div>
                        <div class="col">{{ $temuduga->panel_id }}</div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Tarikh:</p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-1">{{ $temuduga->tarikhTemuduga }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Status:</p>
                        </div>
                        <div class="col">{{ $temuduga->status }}</div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
