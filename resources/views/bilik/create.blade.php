@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" align="center">Mohon bilik</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="{{ route('bilik.store') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label class="form-label" for="namaMesyuarat">Mesyuarat</label>
              <input class="form-control" name="namaMesyuarat" type="text" placeholder="Nama Mesyuarat"  />
            </div>

            <div class="mb-3">
                <label class="form-label" for="pengerusi">Pengerusi</label>
                <input class="form-control" name="pengerusi" type="text"/>
            </div>

            <div class="mb-3">
                <label class="form-label" for="maklumat">Maklumat Makan Minum</label>
                <input class="form-control" name="maklumat" type="text"/>
            </div>

            <div class="mb-3">
                <label class="form-label" for="jenisBilik">Bilik</label>
                <select class="form-select" name="jenisBilik" type="text">
                    <option selected="">Pilih jenis</option>
                    <option value="Dewan">Dewan</option>
                    <option value="Bilik Seminar">Bilik Seminar</option>
                    <option value="Bilik Kecil">Bilik Kecil</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="tarikh">Tarikh</label>
                <input class="form-control" name="tarikh" type="date"/>
            </div>

            <div class="mb-3">
                <label class="form-label" for="bilAhli">Bilangan Ahli</label>
                <input class="form-control" name="bilAhli" type="text"/>
            </div>

            <div class="mb-3">
                <label class="form-label" for="desc">Description</label>
                <textarea class="form-control" name="desc" row="1"></textarea>
            </div>

            <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}"  />
            {{-- <input class="form-control" name="pemohon_id" type="hidden" value="{{ $user->id }}"  /> --}}



            <button class="btn btn-primary" type="submit">Hantar</button>
        </form>
</div>

@endsection
