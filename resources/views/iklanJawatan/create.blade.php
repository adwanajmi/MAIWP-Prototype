@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Iklan Jawatan Baru</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="{{ route('iklanJawatan.store') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label class="form-label" for="tarikhMula">Tarikh Mula</label>
              <input class="form-control" name="tarikhMula" type="date" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="tarikhTutup">Tarikh Tutup</label>
                <input class="form-control" name="tarikhTutup" type="date" />
              </div>

              <div class="mb-3">
                <label class="form-label" for="jawatan">Jawatan</label>
                <select class="form-select" name="jawatan" type="text">
                  <option selected="selected">Pilih</option>
                  <option value="Pegawai Tadbir">Pegawai Tadbir</option>
                  <option value="Pegawai Hal Ehwal">Pegawai Hal Ehwal</option>
                  <option value="Pembantu Hal Ehwal">Pembantu Hal Ehwal</option>

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="penempatan">Penempatan</label>
                <input class="form-control" name="penempatan" type="text" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="kekosongan">Kekosongan</label>
                <input class="form-control" name="kekosongan" type="text" placeholder="" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="tarafJawatan">Taraf Jawatan</label>
                <select class="form-select" name="tarafJawatan" type="text">
                  <option selected="selected">Pilih</option>
                  <option value="Tetap">Tetap</option>
                  <option value="Kontrak">Kontrak</option>
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
