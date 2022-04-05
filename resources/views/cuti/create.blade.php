@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" align="center">Mohon Cuti</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="{{ route('cuti.store') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label class="form-label" for="nama">Nama</label>
              <input class="form-control" name="nama" type="text" placeholder="Nama Pemohon" value="{{ $user->name }}" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="jenisCuti">Jenis Cuti</label>
                <select class="form-select" name="jenisCuti" type="text">
                    <option selected="">Pilih jenis</option>
                    <option value="MC">MC</option>
                    <option value="UL">UL</option>
                    <option value="AL">AL</option>
                    <option value="Maternity">UL</option>

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="pindaanCuti">Pindaan Cuti</label>
                <select class="form-control" name="pindaanCuti" type="text" >
                    <option selected="">Pilih jenis</option>
                    <option value="Tiada">Tiada</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="cutiTanpaGaji">Cuti Tanpa Gaji</label>
                <textarea class="form-control" name="cutiTanpaGaji" rows="3"></textarea>
            </div>

            <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}"  />
            {{-- <input class="form-control" name="pemohon_id" type="hidden" value="{{ $user->id }}"  /> --}}



            <button class="btn btn-primary" type="submit">Hantar</button>
        </form>
</div>

@endsection
