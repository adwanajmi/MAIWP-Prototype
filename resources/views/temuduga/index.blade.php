@extends('base')
@section('content')


    @if (auth()->user()->role == 'pemohon' || auth()->user()->role == 'admin')
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-3 mb-lg-0">
                    <!-- Card header -->
                    <div class="card-header" style="text-align: center">
                        <div>
                            <h5 class="alert alert-warning">Jemputan Temuduga</h5>
                        </div>

                        @if (auth()->user()->role == 'pengesah' || auth()->user()->role == 'panel')
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="/RegisteredUser" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Pendaftaran
                                        Baru</a>
                                </div>
                            </div>
                        @endif

                    </div>

                    <div class="table-responsive">
                        <div
                            class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">
                            <div class="dataTable-top">
                            </div>

                            <div class="dataTable-container" style="height: 500.633px;">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center"><b>Panel Temuduga</b></th>
                                            <th class="text-center">Tarikh</a></th>
                                            <th class="text-center">Lokasi</a></th>

                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                <th class="text-center">Markah Penilaian</a></th>
                                            @endif

                                            <th class="text-center">Status</a></th>

                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                <th class="text-center">Action</a></th>
                                            @endif

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($temuduga as $temuduga)
                                            <tr>
                                                <td class="text-center">{{ $temuduga->panel_id }}</td>
                                                <td class="text-center">{{ $temuduga->tarikhTemuduga }}</td>
                                                <td class="text-center">{{ $temuduga->lokasi }}</td>
                                                <td class="text-center">{{ $temuduga->markahPenilaian }}</td>
                                                <td class="text-center">{{ $temuduga->status }}</td>

                                                <td class="text-center">
                                                    <div>
                                                        <form action="{{ route('temuduga.destroy', $temuduga->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger">Buang</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    @endif

    @if (auth()->user()->role == 'panel')
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-3 mb-lg-0">
                    <!-- Card header -->
                    <div class="card-header">
                        <h5 class="mb-0" style="text-align: center">Temuduga
                        </h5>

                    </div>

                    <div class="table-responsive">
                        <div
                            class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">
                            <div class="dataTable-top">
                            </div>

                            <div class="dataTable-container" style="height: 500.633px;">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">Panel Temuduga</a></th>
                                            <th class="text-center">Tarikh</a></th>
                                            <th class="text-center">Lokasi</a></th>

                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                <th class="text-center">Markah Penilaian</a></th>
                                            @endif

                                            <th class="text-center">Status</a></th>

                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                                                <th class="text-center">Action</a></th>
                                            @endif

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($temuduga as $temuduga)
                                            <tr>
                                                <td class="text-center">{{ $temuduga->panel_id }}</td>
                                                <td class="text-center">{{ $temuduga->tarikhTemuduga }}</td>
                                                <td class="text-center">{{ $temuduga->lokasi }}</td>
                                                <td class="text-center">{{ $temuduga->markahPenilaian }}</td>
                                                <td class="text-center">{{ $temuduga->status }}</td>

                                                <td class="text-center">
                                                    <div>
                                                        <form action="{{ route('temuduga.destroy', $temuduga->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger">Buang</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    @endif

@endsection
