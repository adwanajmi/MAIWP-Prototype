@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="alert alert-success" align="center">Mohon E-Kenderaan</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="{{ route('kenderaan.store') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label class="form-label" for="nama">Nama</label>
              <input class="form-control" name="nama" type="text" placeholder="Nama Pemohon" value="{{ $user->name }}" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="activity">Aktiviti/Program</label>
                <textarea class="form-control" name="activity" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="jenisHaluan">Jenis Haluan</label>
                <select class="form-select" name="jenisHaluan" type="text">
                    <option selected="">Pilih jenis</option>
                    <option value="Sehala">Sehala</option>
                    <option value="Dua Hala">Dua Hala</option>

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="destinasi">Destinasi</label>
                <input class="form-control" name="destinasi" type="text"/>
            </div>

            <div class="mb-3">
                <label class="form-label" for="tarikh">Tarikh</label>
                <input class="form-control" name="tarikh" type="date" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="bilPenumpang">Bilangan Penumpang</label>
                <input class="form-control" name="bilPenumpang" type="text"/>
            </div>


            <div class="mb-3">
                <label class="form-label" for="desc">Description</label>
                <textarea class="form-control" name="desc" rows="3"></textarea>
            </div>

            <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}"  />
            {{-- <input class="form-control" name="pemohon_id" type="hidden" value="{{ $user->id }}"  /> --}}



            <button class="btn btn-primary" type="submit">Hantar</button>
        </form>
</div>

@endsection
