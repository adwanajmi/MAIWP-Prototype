@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Temuduga Baru</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="{{ route('temuduga.store') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label class="form-label" for="pemohon_id">Nama Pemohon</label>
              <input class="form-control" name="pemohon_id" type="text" placeholder="Nama Pemohon" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="panel_id">Panel Interview</label>
                <input class="form-control" name="panel_id" type="text" placeholder="Nama Panel" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="tarikhTemuduga">Tarikh</label>
                <input class="form-control" name="tarikhTemuduga" type="date" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="lokasi">Lokasi</label>
                <input class="form-control" name="lokasi" type="text" placeholder="" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="markahPenilaian">Markah Penilaian</label>
                <input class="form-control" name="markahPenilaian" type="text" placeholder="Markah" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="status">Status</label>
                <select class="form-select" name="status" type="text">
                  <option selected="selected">Pilih</option>
                  <option value="Lulus">Lulus</option>
                  <option value="Simpanan">Simpanan</option>
                  <option value="Gagal">Gagal</option>
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
