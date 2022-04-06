@extends('base')
@section('content')
    <div class="card-header pb-0">
        <div class="d-lg-flex">
            <div>
                <h5>Perkhidmatan</h5>

            </div>
            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pengesah')
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto">
                        <a href="/perkhidmatan/create" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Perkhidmatan
                            Baru</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="card-body px-0 pb-0">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Kontrak</th>
                        <th class="text-center">KWSP</th>
                        <th class="text-center">Pencen</th>
                        <th class="text-center">Tarikh Mula</th>
                        <th class="text-center">Tempoh</th>
                        <th class="text-center">Kursus</th>
                        <th class="text-center">Tempoh Kursus</th>
                        <th class="text-center">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($perkhidmatan as $perkhidmatan)
                        <tr>

                            <td class="text-center">{{ $perkhidmatan->kontrak }}</td>
                            <td class="text-center">{{ $perkhidmatan->kwsp }}</td>
                            <td class="text-center">{{ $perkhidmatan->pencen }}</td>
                            <td class="text-center">{{ $perkhidmatan->tarikhMula }}</td>
                            <td class="text-center">{{ $perkhidmatan->tempoh }}</td>

                            <td class="text-center">{{ $perkhidmatan->kursus }}</td>
                            <td class="text-center">{{ $perkhidmatan->tempohKursus }}</td>

                            <td class="text-center">
                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                    <i class="fas fa-eye text-secondary"></i>
                                </a>
                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit product">
                                    <i class="fas fa-user-edit text-secondary"></i>
                                </a>
                                <form action="{{ route('perkhidmatan.destroy', $perkhidmatan->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <i class="fas fa-trash text-secondary"></i>
                                </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
