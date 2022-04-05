@extends('base')
@section('content')

@if (auth()->user()->role == 'admin')

<div class="row mt-4">
    <div class="col-12">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h5 class="center" align="center">Pengisytiharan Harta,

            @if (auth()-> user()->role =="pengesah")
            <a href="/iklanJawatan/create" input type="button" class="btn bg-gradient-default" style="float: right;">Iklan Baru</a>
            @endif



          </h5>
        </div>



        <div class="table-responsive">
          <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">

                <div class="dataTable-container" style="height: 500.633px;">
                    <table class="table table-flush dataTable-table" id="datatable-search">
            <thead class="thead-light">
              <tr>
                  <th data-sortable="" style="width: 20%;"><a href="#" class="dataTable-sorter">Gaji</a></th>
                  <th data-sortable="" style="width: 20%;" class="desc"><a href="#" class="dataTable-sorter">Elaun </a></th>
                  <th data-sortable="" style="width: 20%;"><a href="#" class="dataTable-sorter">Gajaran</a></th>
                  <th data-sortable="" style="width: 12.0782%;"><a href="#" class="dataTable-sorter">Jumlah Pendapatan</a></th>
                  <th data-sortable="" style="width: 21.6696%;"><a href="#" class="dataTable-sorter">Pendapatan Tambahan</a></th>
                  <th data-sortable="" style="width: 19.1829%;"><a href="#" class="dataTable-sorter">Kategori</a></th>

                  @if (auth()-> user()->role =="pemohon")
                  <th data-sortable="" style="width: 19.1829%;"><a href="#" class="dataTable-sorter">Tindakan</a></th>
                  @endif

                  @if (auth()-> user()->role =="admin"|| auth()-> user()->role =="pengesah")
                  <th data-sortable="" style="width: 19.1829%;"><a href="#" class="dataTable-sorter">Action</a></th>
                  @endif

                </tr>
            </thead>
            <tbody>
                @foreach ($harta as $harta)

                <tr>
                    <td class="text-sm font-weight-normal">{{ $harta->jenisPendapatan }}</td>
                    <td class="text-sm font-weight-normal">{{ $harta->totalPendapatan }}</td>
                    <td class="text-sm font-weight-normal">{{ $harta->pendapatanTambahan }}</td>
                    <td class="text-sm font-weight-normal">{{ $harta->kategori }}</td>
                    <td class="text-sm font-weight-normal">{{ $harta->tanggungan }}</td>
                    <td class="text-sm font-weight-normal">{{ $harta->tarikhDeclare }}</td>

                    @if (auth()-> user()->role =="pemohon")
                    <td><a class="btn btn-info" href="/permohonan/create?jawatan_id={{ $harta->id }}">Mohon</a></td>
                    @endif

                    @if (auth()-> user()->role =="admin"|| auth()-> user()->role =="pengesah")
                    <td class="text-sm font-weight-normal">
                        <div>
                            <form action="{{ route('iklanJawatan.destroy',$harta->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('iklanJawatan.show',$harta->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('iklanJawatan.edit',$harta->id) }}">Edit</a>

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
          </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 57 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"><li class="pager"><a href="#" data-page="1">‹</a></li><li class="active"><a href="#" data-page="1">1</a></li><li class=""><a href="#" data-page="2">2</a></li><li class=""><a href="#" data-page="3">3</a></li><li class=""><a href="#" data-page="4">4</a></li><li class=""><a href="#" data-page="5">5</a></li><li class=""><a href="#" data-page="6">6</a></li><li class="pager"><a href="#" data-page="2">›</a></li></ul></nav></div></div>
        </div>
      </div>
    </div>
</div>

@endif


@if (auth()->user()->role == 'pekerja')

<div class="center">
    <div style="height: 20px"></div>
    <table class="table table-striped" border="2">
        <tr >
            <td colspan="2" class="text-center">
                <b>Pengisytiharan Harta</b>
            </td>
        </tr>


        <tr>
            <td><b>Pekerja ID:</b><input type="hidden" name="ecode"> # 002{{ $user->id }}</td>
        </tr>

        <tr>
            <td><b>Nama Pekerja:</b><input type="hidden" name=""> {{ $user->name }}</td>
            <td><b> Tarikh Isytihar:</b><input type="hidden" name="paydate"> {{ date('Y-m-d') }}</td>
        </tr>
        <tr>
            @foreach ( $harta as $harta)

            <td>

                <table class="table table-hover">
                    <tbody>

                    <tr>
                        <th>Jenis Pendapatan</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td>{{ $harta->jenisPendapatan }} </td>
                        <td><input type="hidden" name="jenisPendapatan"> RM {{ $harta->totalPendapatan }} </td>
                    </tr>
                    {{-- <tr>
                        <td>Elaun</td>
                        <td><input type="hidden" name="jenisPendapatan"> RM 3000</td>
                    </tr>
                    <tr>
                        <td>Ganjaran</td>
                        <td><input type="hidden" name="jenisPendapatan"> RM 3000</td>

                    </tr> --}}

                    </tbody>
                    </td></table>
            <td>
                <table class="table table-hover">
                    <thead>
                    <tbody>
                    <tr>
                        <th>Pendapatan Tambahan</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="hidden" name="proftax"> RM {{ $harta->pendapatanTambahan }}</td>
                    </tr>
                    {{-- <tr>
                        <td>SOCSO</td>
                        <td><input type="hidden" name="tax"> RM 150</td>
                    </tr> --}}

                    </thead>
                    </tbody>
                </table>

            </td>
        </tr>
        <tr>
            <td>
                <table class="table table-hover">
                    <thead><b>Kategori:</b></thead>
                    <tbody>
                    <tr>
                        <td align="center">{{ $harta->kategori }}</td>
                    </tr>


                    </tbody>
                </table>

            </td>
            <td>
                <table class="table table-hover">
                    <thead><b>Tanggungan:</b></thead>
                    <tbody>
                    <tr>
                        <td align="center">{{ $harta->tanggungan }}</td>
                        <td><input type="hidden" name="contibution1"></td>
                    </tr>

                    </tbody>
                </table>


            </td>
            @endforeach

        </tr>
    </table>
</div>

<div class=""row>
    <div class="col-md-6" align="right">

        <div class="col-auto">
            <a class="btn btn-falcon-default btn-sm" href="/harta/{{ $user->id }}/edit">
                <span class="fas fa-pencil-alt fs--2 me-1"></span>Ubah
            </a>
            <a class="btn btn-falcon-default btn-sm" href="/harta/create">
                <span class="fas fa-pencil-alt fs--2 me-1"></span>Tambah
            </a>
        </div>

    </div>
</div>
</div>

@endif


@endsection
