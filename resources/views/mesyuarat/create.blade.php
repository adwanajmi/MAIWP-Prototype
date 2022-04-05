@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Mesyuarat Baru</h5>
        </div>
        <div class="col-auto ms-auto">

        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
            <form action="{{ route('mesyuarat.store') }}" method="POST">
                @csrf
            <div class="mb-3">
              <label class="form-label" for="user_id">Nama Pekerja</label>
              <select class="form-control" name="user_id" >

                @foreach ($list as $name)
                <option value="{{ $name->id }}">{{ $name->name }}</option>
                @endforeach

              </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="tarikhMesyuarat">Tarikh Mesyuarat</label>
                <input class="form-control" name="tarikhMesyuarat" type="date" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="kelulusanMesyuarat">Kelulusan Mesyuarat</label>
                <input class="form-control" name="kelulusanMesyuarat" type="text" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="suratAmaran">Surat Amaran</label>
                <input class="form-control" name="suratAmaran" type="text"  />
            </div>

            {{-- <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}"  /> --}}


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
