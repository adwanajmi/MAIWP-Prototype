@extends('base')
@section('content')

@if (auth()-> user()->role =="admin")

<div class="card mb-3">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col">
          <h5 class="mb-0">Bayar Gaji Pekerja </h5>
        </div>
        <div class="col-auto">
            <a class="btn btn-falcon-default btn-sm" href="/user/{{ $user->id }}/edit"><span class="fas fa-pencil-alt fs--2 me-1"></span>Update</a>
            <a class="btn btn-falcon-default btn-sm" href="/user/{{ $user->id }}/edit"><span class="fas fa-adress-book"></span>Bayar</a>

        </div>
      </div>
    </div>
    <div class="card-body bg-light border-top">

      <div class="row">
        <div class="col-lg col-xxl-5">
          <h6 class="fw-semi-bold ls mb-3 text-uppercase">Pekerja ID</h6>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Nama Pekerja:</p>
            </div>
            <div class="col">{{ $user->name }}</div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Emel:</p>
            </div>
            <div class="col">{{ $user->email }}</div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Role:</p>
            </div>
            <div class="col">{{ $user->role }}</div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Jumlah Pendapatan:</p>
            </div>
            <div class="col">RM {{ $user->icNo }}</div>
          </div>


          </div>
        </div>

      </div>
    </div>
</div>
@endif

@if (auth()-> user()->role =="pekerja")

<div>
    <div class="col-md-5">
        <div class="col-md-7">

        </div>
    </div>
    <b><h5>Pekerja ID: #002{{ $user->id }}</b></h5>
</div>

<div class="center">
    <div style="height: 20px"></div>
    <table class="table table-striped" border="2">
        <tr >
            <td colspan="2" class="text-center">
                <b>Slip Gaji</b>
            </td>
        </tr>


        <tr>
            <td>Pekerja ID:<input type="hidden" name="ecode"> #002{{ $user->id }}</td>
            <td>Tempoh Bayar:<input type="hidden" name="payperiod"> 3 Hari</td>
        </tr>
        <tr>
            <td>Nama Pekerja:<input type="hidden" name=""> {{ $user->name }}</td>
            <td>Tarikh Bayar:<input type="hidden" name="paydate"> {{ date('Y-m-d') }}</td>
        </tr>
        <tr>
            <td>
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>Pendapatan</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td>Gaji Asas</td>
                        <td><input type="hidden" name="basicpay"> RM 3000</td>
                    </tr>

                    </tbody>
                    </td></table>
            <td>
                <table class="table table-hover">
                    <thead></thead>
                    <tbody>
                    <tr>
                        <th>Penolakan</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td>EPF</td>
                        <td><input type="hidden" name="proftax"> RM 350</td>
                    </tr>
                    <tr>
                        <td>SOCSO</td>
                        <td><input type="hidden" name="tax"> RM 150</td>
                    </tr>
                    </tbody>
                </table>

            </td>
        </tr>
        <tr>
            <td>
                <table class="table table-hover">
                    <thead>Jumlah Dibayar:</thead>
                    <tbody>
                    <tr>
                        <td>Pendapatan</td>
                        <td><input type="hidden" name="earnings">RM 3000</td>
                    </tr>
                    <tr>
                        <td>Penolakan</td>
                        <td><input type="hidden" name="deductions">RM 500</td>
                    </tr>
                    <tr>
                        <td>Gaji Bersih</td>
                        <td><input type="hidden" name="netpay">RM 2500</td>
                    </tr>
                    </tbody>
                </table>

            </td>
            <td>
                <table class="table table-hover">
                    <thead>ER Contributions</thead>
                    <tbody>
                    <tr>
                        <td>Contribution1</td>
                        <td><input type="hidden" name="contibution1"></td>
                    </tr>
                    </tbody>
                </table>

            </td>
        </tr>
    </table>
</div>

<div class=""row>
    <div class="col-md-6" align="right">
        <button type="button" class="btn btn-primary active"  >Print</button>
        <button type="button" class="btn btn-primary active"  >Download</button>
    </div>
</div>
</div>

@endif

@endsection
