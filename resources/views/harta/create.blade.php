@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" align="center">Pengisytiharan Harta</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="{{ route('harta.store') }}" method="POST">
                @csrf

            <div class="mb-3">
                    <label class="form-label" for="jenisPendapatan">Jenis Pendapatan</label>
                    <select class="form-select" name="jenisPendapatan" type="text">
                      <option selected="selected">Pilih</option>
                      <option value="Gaji">Gaji</option>
                      <option value="Elaun">Elaun</option>
                      <option value="Ganjaran">Ganjaran</option>
                    </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="totalPendapatan">Jumlah Pendapatan (RM)</label>
                <input class="form-control" name="totalPendapatan" type="float" placeholder="" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="pendapatanTambahan">Pendapatan Tambahan (RM)</label>
                <input class="form-control" name="pendapatanTambahan" type="float" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="kategori">Kategori</label>
                <select class="form-select" name="kategori" type="text">
                  <option selected="selected">Pilih</option>
                  <option value="Kategori A">Kategori A</option>
                  <option value="Kategori B">Kategori B</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="tanggungan">Tanggungan</label>
                <input class="form-control" name="tanggungan" type="float" placeholder="" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="tarikhDeclare">Tarikh Isytihar</label>
                <input class="form-control" name="tarikhDeclare" type="date" placeholder="" />
            </div>

            <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}"  />




            <button class="btn btn-primary" type="submit">Simpan</button>
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
