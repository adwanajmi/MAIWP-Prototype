@extends('base')
@section('content')

<div class="card h-md-100 ecommerce-card-min-width">
    <div class="card-header">
        <div class="row flex-between-end">
          <div class="text-center">
            <h5 class="alert alert-success">Latihan</h5>
          </div>
          @if (auth()->user()->role == 'admin')

          <div class="col-auto ms-auto">
            <div class="col-auto">
                <a class="btn btn-falcon-default btn-sm" href="/latihan/create">
                    <span class="fas fa-pencil-alt fs--2 me-1"></span>Tambah Baru</a>
            </div>
          </div>
          @endif

        </div>
      </div>
    <div id="tableExample2" data-list='{"valueNames":["user","role","actions"],"page":5,"pagination":true}'>
        <div class="table-responsive scrollbar">
          <table class="table table-bordered table-striped fs--1 mb-0">
            <thead class="bg-200 text-900">
        <tr>
          <th scope="col" class="text-center">Jenis Kursus</th>
          <th scope="col" class="text-center">Tempat</th>
          <th scope="col" class="text-center">Tarikh</th>
          <th scope="col" class="text-center">Peserta</th>
          <th scope="col" class="text-center">Trainer</th>

            @if (auth()->user()->role == 'admin')
          <th scope="col" class="text-center">Action</th>
            @endif
        </tr>
            </thead>
      <tbody>
          @foreach ($latihan as $latihan)
        <tr>
          <td class="text-center">{{ $latihan->jenisKursus }}</td>
          <td class="text-center">{{ $latihan->tempat }}</td>
          <td class="text-center">{{ $latihan->tarikh }}</td>
          <td class="text-center">{{ $latihan->peserta }}</td>
          <td class="text-center">{{ $latihan->trainer }}</td>

          @if (auth()->user()->role == 'admin')

          <td class="text-center">
            <div>
                <form action="{{ route('latihan.destroy',$latihan->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('latihan.show',$latihan->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('latihan.edit',$latihan->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
          </td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
        </div>
</div>

<div class="d-flex justify-content-center mt-3">
    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
    <ul class="pagination mb-0"></ul>
    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
</div>




@endsection
