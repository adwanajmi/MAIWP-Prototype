@extends('base')
@section('content')

    @if (auth()->user()->role == 'admin')
        <div class="card mb-3 mb-lg-0">
            <div class="card-header bg-light d-flex justify-content-between">
                <div>
                    <h5 class="mb-0">Urus Pengguna</h5>

                </div>
            </div>





            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Kehadiran</th>
                        <th class="text-center">Tatatertib</th>
                        <th class="text-center">Gaji</th>

                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->role }}</td>
                            <td class="text-center"><a class="btn btn-info" href="/kehadiran">Lihat</a></td>
                            <td class="text-center"><a class="btn btn-info" href="/tatatertib">Lihat</a></td>
                            <td class="text-center"><a class="btn btn-info"
                                    href="{{ route('user.show', $user->id) }}">Bayar</a></td>


                            <td class="text-center">
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">

                                    {{-- <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a> --}}

                                    <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Ubah</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Buang</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="pagination mb-0"></ul>
                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                    data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
            </div>


        </div>
    @endif


    @if (auth()->user()->role == 'pemohon')
        <div class="container-fluid">
            <form name="myform" class="text-muted" method="post">
                <input type="hidden" name="_token" value="WGgkuEQHRb14eFlRvoLkZ4PwqMhpp9PtK6Qw8wpE">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <p style="color:red;"></p>
                                <div class="alert alert-info text-white border-0 font-13" role="alert">
                                    Maklumat Peribadi Pemohon
                                </div>
                                <div class="form-group">
                                    <label>Nama Penuh</label>
                                    <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}"
                                        required="" placeholder="Nama Penuh" disabled="">
                                </div>

                                <div class="form-group">
                                    <label>No. Kad Pengenalan</label>
                                    <input type="text" class="form-control" name="icno" value="960805146225" required=""
                                        placeholder="" disabled="">
                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label>Taraf Perkahwinan <code class="highlighter-rouge">*</code></label><br>
                                        <input type="hidden" id="obj_taraf_kahwin" value="">
                                        <select class="form-control" name="status_kahwin" id="status_kahwin"
                                            oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                            oninput="this.setCustomValidity('')" required="">
                                            <option value="">Belum Berkahwin</option>
                                            <option value="2">Berkahwin</option>
                                            <option value="3">Janda</option>
                                            <option value="4">Duda</option>
                                        </select>

                                    </div>
                                    <div class="col-lg-6">
                                        <label for="notel">No. Telefon Bimbit <code class="highlighter-rouge">*</code>
                                        </label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <select class="form-control" name="operator" id="operator"
                                                    oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                                    oninput="this.setCustomValidity('')" required="">
                                                    <!-- <option>Sila pilih</option> -->
                                                    <option value="010">010</option>
                                                    <option value="011">011</option>
                                                    <option value="012">012</option>
                                                    <option value="013">013</option>
                                                    <option value="014">014</option>
                                                    <option value="015">015</option>
                                                    <option value="016">016</option>
                                                    <option value="017">017</option>
                                                    <option value="018">018</option>
                                                    <option value="019">019</option>
                                                    <option value="0119">0119</option>
                                                    <option value="0112">0112</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="notel" id="notel"
                                                    maxlength="8" placeholder="1234567"
                                                    onkeypress="javascript:return isNumber(event)" onblur="val_notel()"
                                                    oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                                    oninput="this.setCustomValidity('')" required="">
                                                <!-- <div id="notel1msg" class="help-block with-errors text-danger"></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" id="usr_email" value="adwaaa@live.com">
                                    <label>Alamat E-Mel <code class="highlighter-rouge">*</code></label>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email"
                                            parsley-type="email" placeholder="Enter a valid e-mail" onblur="val_email()"
                                            oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                            oninput="this.setCustomValidity('')" required="">
                                    </div>
                                </div>

                                <div class="alert alert-info text-white border-0 font-13" role="alert">
                                    Maklumat Surat Menyurat
                                </div>

                                <div class="form-group">
                                    <label>Alamat Surat Menyurat <code class="highlighter-rouge">*</code></label>
                                    <input type="text" name="alamat1" id="alamat1" maxlength="50" class="form-control"
                                        onkeyup="uppercase1()" placeholder="No. Rumah / Jalan" onblur="val_alamat1()"
                                        oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                        oninput="this.setCustomValidity('')" required="">
                                    <!-- <div id="alamat1msg" class="help-block with-errors text-danger"></div> -->
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat2" id="alamat2" maxlength="35" class="form-control"
                                        onkeyup="uppercase2()" placeholder="Nama Taman / Kampung">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat3" id="alamat3" maxlength="35" class="form-control"
                                        onkeyup="uppercase3()" placeholder="">
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-3">
                                        <label>Poskod <code class="highlighter-rouge">*</code></label>
                                        <div>
                                            <input data-parsley-type="number" type="text" maxlength="5" name="poskod"
                                                id="poskod" onkeypress="javascript:return isNumber(event)"
                                                class="form-control" placeholder="Poskod" onblur="val_pkod()"
                                                onchange="checkPoskod(this.value)"
                                                oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                                oninput="this.setCustomValidity('')" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Bandar <code class="highlighter-rouge">*</code></label>
                                        <input type="text" class="form-control" name="bandar" id="bandar"
                                            onkeyup="uppercase4()" placeholder="Bandar" onblur="val_bandar()"
                                            oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                            oninput="this.setCustomValidity('')" required="">
                                        <!-- <div id="bandar1msg" class="help-block with-errors text-danger"></div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Negeri <code class="highlighter-rouge">*</code></label>
                                    <select id="negeri" name="negeri"
                                        oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                        oninput="this.setCustomValidity('')" tabindex="-1" class="selectized"
                                        style="display: none;" required="">
                                        <option value="14" selected="selected">KUALA LUMPUR</option>
                                    </select>
                                    <div class="selectize-control single">
                                        <div class="selectize-input items required has-options full has-items">
                                            <div class="item" data-value="14">KUALA LUMPUR</div><input
                                                type="select-one" autocomplete="off" tabindex="" id="negeri-selectized"
                                                style="width: 4px; opacity: 0; position: absolute; left: -10000px;">
                                        </div>
                                        <div class="selectize-dropdown single"
                                            style="display: none; width: 578px; top: 18px; left: 0px;">
                                            <div class="selectize-dropdown-content">
                                                <div class="option" data-selectable="" data-value="01">JOHOR</div>
                                                <div class="option" data-selectable="" data-value="02">KEDAH</div>
                                                <div class="option" data-selectable="" data-value="03">KELANTAN
                                                </div>
                                                <div class="option" data-selectable="" data-value="04">MELAKA</div>
                                                <div class="option" data-selectable="" data-value="05">NEGERI
                                                    SEMBILAN</div>
                                                <div class="option" data-selectable="" data-value="06">PAHANG</div>
                                                <div class="option" data-selectable="" data-value="07">PULAU PINANG
                                                </div>
                                                <div class="option" data-selectable="" data-value="08">PERAK</div>
                                                <div class="option" data-selectable="" data-value="09">PERLIS</div>
                                                <div class="option" data-selectable="" data-value="10">SELANGOR
                                                </div>
                                                <div class="option" data-selectable="" data-value="11">TERENGGANU
                                                </div>
                                                <div class="option" data-selectable="" data-value="12">SABAH</div>
                                                <div class="option" data-selectable="" data-value="13">SARAWAK</div>
                                                <div class="option selected" data-selectable="" data-value="14">KUALA LUMPUR
                                                </div>
                                                <div class="option" data-selectable="" data-value="15">LABUAN</div>
                                                <div class="option" data-selectable="" data-value="16">PUTRAJAYA
                                                </div>
                                                <div class="option" data-selectable="" data-value="99">LAIN</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <p></p>

                                <div class="alert alert-info text-white border-0 font-13" role="alert">
                                    Pusat Temu Duga / Ujian Khas
                                </div>
                                <div class="form-group">
                                    <label>Pilih Pusat Temu Duga / Ujian Khas <code
                                            class="highlighter-rouge">*</code></label>
                                    <select class="form-control" name="operator" id="operator"
                                        oninvalid="this.setCustomValidity('Sila isi maklumat berikut')"
                                        oninput="this.setCustomValidity('')" required="">
                                        <!-- <option>Sila pilih</option> -->
                                        <option value="010">Kuala Lumpur</option>
                                        <option value="011">Putrajaya</option>
                                        <option value="012">Selangor</option>
                                        <option value="013">Pulau Pinang</option>
                                        <option value="014">Melaka</option>
                                        <option value="015">Johor</option>
                                        <option value="016">Kedah</option>

                                    </select>
                                </div>
                                <p>
                                    Nota :
                                    <br>
                                </p>
                                <ol>
                                    <li>Pusat Temu Duga/Ujian Khas bagi pemohon yang merupakan <b>pegawai sedang
                                            berkhidmat</b> adalah mengikut
                                        lokasi terdekat dengan tempat bertugas pemohon. Bagi pemohon lain, sila pilih Pusat
                                        Temu Duga/Ujian Khas yang terdekat
                                        dengan lokasi/tempat tinggal semasa, <b>tertakluk kepada pertimbangan dan keputusan
                                            muktamad Suruhanjaya</b>.</li>
                                    <li>Sebarang pertukaran selepas urusan penjadualan temu duga/ujian khas tidak akan
                                        dilayan.</li>
                                </ol>
                                <p></p>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="form-group m-b-0">
                            <div>

                                <button type="submit" name="action" value="simpan" class="btn btn-info">
                                    <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif




@endsection
