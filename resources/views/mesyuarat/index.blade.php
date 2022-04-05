@extends('base')
@section('content')

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <!-- Card header -->

                <div class="card-header">
                    <h3>Mesyuarat </h3>
                </div>

            <div class="card">
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th class="text-center">Pekerja</th>
                        <th class="text-center">Tarikh</th>
                        <th class="text-center">Mesyuarat</th>
                        <th class="text-center">Surat Amaran</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $mesyuarat as $mesyuarat )

                      <tr>
                        <th class="text-center">{{ $mesyuarat->user->name }}</th>
                        <td class="text-center">{{ $mesyuarat->tarikhMesyuarat }}</td>
                        <td class="text-center">{{ $mesyuarat->kelulusanMesyuarat }}</td>
                        <td class="text-center"></td>
                      </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
</div>


@endsection
