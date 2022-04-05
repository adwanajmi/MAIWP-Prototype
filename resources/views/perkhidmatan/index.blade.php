@extends('base')
@section('content')

<div class="card-header pb-0">
    <div class="d-lg-flex">
      <div>
        <h5 class="mb-0">Perkhidmatan</h5>

      </div>
      @if (auth()-> user()->role =="admin"|| auth()-> user()->role =="pengesah")

      <div class="ms-auto my-auto mt-lg-0 mt-4">
        <div class="ms-auto my-auto">
          <a href="/perkhidmatan/create" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Perkhidmatan Baru</a>
        </div>
      </div>
      @endif
    </div>
  </div>
  <div class="card-body px-0 pb-0">
    <div class="table-responsive">
      <table class="table table-flush" id="products-list">
        <thead class="thead-light">
          <tr>
            <th>Pemohon</th>
            <th>Jawatan</th>
            <th>Negeri</th>
            <th>Warganegara</th>
            <th>Akademik</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($perkhidmatan as $perkhidmatan)
          <tr>

            <td class="text-sm">{{ $perkhidmatan->kontrak }}</td>
            <td class="text-sm">{{ $perkhidmatan->kwsp }}</td>
            <td class="text-sm">{{ $perkhidmatan->pencen }}</td>
            <td class="text-sm">{{ $perkhidmatan->tarikhMula}}</td>
            <td class="text-sm">{{ $perkhidmatan->tempoh}}</td>

            <td>
              <span class="badge badge-danger badge-sm">{{ $perkhidmatan->status }}</span>
            </td>
            <td class="text-sm">
              <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                <i class="fas fa-eye text-secondary"></i>
              </a>
              <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                <i class="fas fa-user-edit text-secondary"></i>
              </a>
              <form action="{{ route('perkhidmatan.destroy',$perkhidmatan->id) }}" method="POST">
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
