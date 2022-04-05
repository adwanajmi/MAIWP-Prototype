@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Permohonan Baru</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="{{ route('permohonan.store') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label class="form-label" for="nama">Nama Pemohon</label>
              <input class="form-control" name="nama" type="text" placeholder="Nama Pemohon" value="{{ $user->name }}" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="icNo">IC/Mykad</label>
                <input class="form-control" name="icNo" type="text" placeholder="No Mykad" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="jantina">Jantina</label>
                <select class="form-select" name="jantina" type="text">
                    <option selected="selected">Pilih</option>
                    <option value="Lelaki">Lelaki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="negeriAsal">Negeri Asal</label>
                <select class="form-select" name="negeriAsal" type="text">
                    <option selected="selected">Pilih</option>
                    <option value="KL">KL</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Johor">Johor</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="warganegara">Warganegara</label>
                <select class="form-select" name="warganegara" type="text">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="Status">Status</label>
                <select class="form-select" name="status" type="text">
                    <option value="Bujang">Bujang</option>
                    <option value="Kahwin">Kahwin</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="akademik">Akademik</label>
                <select class="form-select" name="akademik" type="text">
                  <option selected="selected">Pilih</option>
                  <option value="SPM">SPM</option>
                  <option value="Diploma">Diploma</option>
                  <option value="Degree">Degree</option>
                  <option value="Master">Master</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="pengalamanKerja">Pengalaman Kerja</label>
                <textarea class="form-control" name="pengalamanKerja" rows="3"></textarea>
            </div>

            <input class="form-control" name="jawatan_id" type="hidden" value="{{ $jawatan_id }}"  />
            <input class="form-control" name="pemohon_id" type="hidden" value="{{ $user->id }}"  />



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
