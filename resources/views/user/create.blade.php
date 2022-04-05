@extends('base')
@section('content')



<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="alert alert-success" align="center">Daftar Pemohon</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
    </div>
</div>

<div class="card-body pb-3">
    <form  method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="name">Nama</label>
            <input class="form-control" id="name" type="name" name="name" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="email">Emel</label>
          <input class="form-control" id="email" type="email" name="email"  />
        </div>
        <div class="mb-3">
          <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Kata Laluan</label>
          </div>
          <input class="form-control" id="password" type="password" name="password"  />
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="password_confirmation">Sahkan Kata Laluan</label>
            </div>
            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" />
        </div>

        <div class="mb-3">
            <label class="form-label" for="role">Role</label>
            <select class="form-select" name="role">
              <option selected="selected">Select</option>
              <option value="pemohon">Pemohon</option>
              <option value="pengesah">Pengesah</option>
              <option value="panel">Panel</option>
              <option value="admin">Admin</option>

            </select>
          </div>

        <div class="mb-3">
          <button class="btn btn-success d-block w-100 mt-3" >Daftar</button>
        </div>
    </form>
</div>

@endsection
