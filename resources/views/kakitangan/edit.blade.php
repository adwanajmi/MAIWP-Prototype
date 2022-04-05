@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Edit Kakitangan</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="/kakitangan/{{ $kakitangan->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label class="form-label" for="pekerja_id">Pekerja ID</label>
                    <input class="form-control" name="pekerja_id" type="text" placeholder="ID" />
                  </div>

                  <div class="mb-3">
                      <label class="form-label" for="namaPenuh">Nama Penuh</label>
                      <input class="form-control" name="namaPenuh" type="text" placeholder="Nama Penuh" />
                  </div>

                  <div class="mb-3">
                      <label class="form-label" for="icNo">IC/Mykad</label>
                      <input class="form-control" name="icNo" type="text" placeholder="IC" />
                  </div>

                  <div class="mb-3">
                      <label class="form-label" for="telNo">Nombor Telefon</label>
                      <input class="form-control" name="telNo" type="text" placeholder="Nombor" />
                  </div>

                  <div class="mb-3">
                      <label class="form-label" for="email">Emel</label>
                      <input class="form-control" name="email" type="text" placeholder="Emel" />
                  </div>

                  <div class="mb-3">
                      <label class="form-label" for="tarafPerkhidmatan">Perkhidmatan</label>
                      <select class="form-select" name="tarafPerkhidmatan" type="text">
                        <option selected="selected">Pilih Jenis </option>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                      </select>
                  </div>

                  <div class="mb-3">
                      <label class="form-label" for="jawatan">Jawatan</label>
                      <select class="form-select" name="jawatan" type="text">
                        <option selected="selected">Pilih Jenis </option>
                        <option value="Pegawai Tadbir">Pegawai Tadbir</option>
                        <option value="Pegawai Hal Ehwal">Pegawai Hal Ehwal</option>
                        <option value="Pembantu Hal Ehwal">Pembantu Hal Ehwal</option>
                      </select>
                  </div>

                  <div class="mb-3">
                      <label class="form-label" for="cawangan">Cawangan</label>
                      <select class="form-select" name="cawangan" type="text">
                        <option selected="selected">Pilih Jenis </option>
                        <option value="KL">KL</option>
                        <option value="Putrajaya">Putrajaya</option>
                        <option value="Labuan">Labuan</option>

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
