@extends('base')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
                    <h5 class="mb-0" style="text-align: center">Perkhidmatan Baru</h5>
                </div>
                <div class="col-auto ms-auto">

                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2"
                    id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
                    <form action="{{ route('perkhidmatan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="kontrak">Kontrak</label>
                            <input class="form-control" name="kontrak" type="text" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="kwsp">KWSP</label>
                            <input class="form-control" name="kwsp" type="text"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="pencen">Pencen</label>
                            <input class="form-control" name="pencen" type="text" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="tarikhMula">Tarikh Mula</label>
                            <input class="form-control" name="tarikhMula" type="date" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="tempoh">Tempoh</label>
                            <input class="form-control" name="tempoh" type="text" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="kursus">Kursus</label>
                            <input class="form-control" name="kursus" type="text" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="TempohKursus">Tempoh Kursus</label>
                            <input class="form-control" name="tempohKursus" type="text" />
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
