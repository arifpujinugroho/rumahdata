@extends('layout.master')

@section('title')
KK {{$kk->nama_kk}}
@endsection
@section('header')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css')}}">
@endsection
@section('content')
    <!-- Page-body start -->
    <div class="page-body">
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12">
                </div>
                <!-- end of col-sm-8 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of card-block -->
        <div class="row">
            <div class="col-lg-12">
                <!-- tab content start -->
                <div class="tab-content">
                    <!-- tab panel personal start -->
                    <div class="tab-pane active" id="personal" role="tabpanel">
                        <!-- personal card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Kepala Keluarga</h5>
                                {{--<a href="edit"><button id="edit-btn" type="button"
                                        class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                        <i class="icofont icofont-edit"> </i> Edit
                                    </button></a>--}}
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="general-info">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="table-responsive">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Nama Kepala Keluarga</th>
                                                                        <td>{{$kk->nama_kk}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Nomer KK</th>
                                                                        <td>{{$kk->no_kk}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">RT/RW</th>
                                                                        <td>{{$kk->rt}}/{{$kk->rw}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Kelurahan</th>
                                                                        <td>{{$kk->kel}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Kecamatan</th>
                                                                        <td>{{$kk->kec}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Kota/Kabupaten</th>
                                                                        <td>{{$kk->kota}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Provinsi</th>
                                                                        <td>{{$kk->provinsi}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Kode Pos</th>
                                                                        <td>{{$kk->kodepos}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                            <!-- end of general info -->
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                            </div>
                            <!-- end of card-block -->
                        </div>
                        <!-- Column Selectors table start -->
<div class="card">
        <div class="card-header">
            <h5>Anggota Keluarga</h5>
            <button class="btn btn-sm btn-success f-right" data-toggle="modal" data-target="#tambah-anggota">Tambah Anggota</button>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table id="anggota-keluarga" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Status Keluarga</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Pendidikan</th>
                            <th>Pekerjaan</th>
                            <th>Warganegara</th>
                            <th>Status Perkawinan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keluarga as $a)
                        <tr>
                            <td>{{$a->nik_keluarga}}</td>
                            <td>{{$a->nama_keluarga}}</td>
                            <td>{{$a->status_keluarga}}</td>
                            <td>
                                @if($a->status_keluarga == "L")
                                Laki-Laki
                                @else 
                                Perempuan
                                @endif
                            </td>
                            <td>{{$a->tempatlahir}}</td>
                            <td>{{$a->tanggallahir}}</td>
                            <td>{{$a->agama}}</td>
                            <td>{{$a->pendidikan}}</td>
                            <td>{{$a->jns_kerja}}</td>
                            <td>{{$a->warganegara}}</td>
                            <td>{{$a->status_perkawinan}}</td>
                            <td>
                                <button class="btn btn-mini btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Column Selectors end -->
    <!-- Column Selectors start -->
    <div class="card">
            <div class="card-header">
                <h5>File Arsip</h5>
                @if($jmlkeluarga > 0)
                <button class="btn btn-sm btn-success f-right" data-toggle="modal" data-target="#tambah-file">Tambah File</button>
                @endif
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Pemilik</th>
                                <th>Jenis Arsip</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($file as $a)
                            <tr>
                                <td>{{$a->pemilik}}</td>
                                <td>{{$a->jns_file}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-mini btn-default"><i class="fa fa-download"></i></button>
                                            <button class="btn btn-mini btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Column Selectors end -->
                    </div>
                </div>
                <!-- personal card end-->
            </div>
            <!-- tab pane personal end -->


        </div>

    </div>
</div>
</div>
</div>
</div>
<!-- info card end -->
</div>
<!-- tab pane info end -->
</div>
<!-- tab content end -->
</div>
</div>
</div>
<!-- Page-body end -->
@endsection

@section('end')
    <!-- Modal -->
    <div class="modal fade" id="tambah-anggota" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Anggota</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="{{url('admin/addkeluarga')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="kode" value="{{Crypt::encrypt($kk->id)}}">
                    <div class="form-group">
                      <label>NIK</label>
                      <input type="number" class="form-control" name="nik_keluarga" id="nik_keluarga" placeholder="NIK" required>
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_keluarga" id="nama_keluarga" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                      <label>Status Hubungan Dalam Keluarga</label>
                      <select class="form-control" name="status_keluarga" required>
                        <option value="">Status Hubungan</option>
                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jns_kel" required>
                        <option value="">Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pendidikan</label>
                      <select class="form-control" name="pendidikan" required>
                        <option value="">Pilih Pendidikan</option>
                        <option value="Belum Tamat SD">Belum Tamat SD/Sederajat</option>
                        <option value="SD">SD/Sederajat</option>
                        <option value="Belum Tamat SLTP">Belum Tamat SLTP/Sederajat</option>
                        <option value="SLTP">SLTP/Sederajat</option>
                        <option value="Belum Tamat SLTA">Belum Tamat SLTA/Sederajat</option>
                        <option value="SLTA">SLTA/Sederajat</option>
                        <option value="Strata 1">Strata 1/Sederajat</option>
                        <option value="Strata 2">Strata 2/Sederajat</option>
                        <option value="Strata 3">Strata 3/Sederajat</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jenis Pekerjaan</label>
                      <select class="form-control" name="jns_kerja" required>
                        <option value="">Pilih Pendidikan</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Pegawai Negeri Sipil">PNS</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kewarganegaraan</label>
                      <select class="form-control" name="warganegara" required>
                        <option value="WNI">Warga Negara Indonesia</option>
                        <option value="WNA">Warga Negara Asing</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Status Perkawinan</label>
                      <select class="form-control" name="status_perkawinan" required>
                        <option class="text-muted" value="">Pilih Status</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                      </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    @if($jmlkeluarga > 0)
    <!-- Modal -->
    <div class="modal fade" id="tambah-file" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah File</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <form action="{{url('admin/addfile')}}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                            @csrf
                            <input type="hidden" name="kode" value="{{Crypt::encrypt($kk->id)}}">
                            <div class="form-group">
                              <label>Pemilik</label>
                              <select class="form-control" name="pemilik" required>
                                <option class="text-muted" value="">Pilih Pemilik</option>
                                @foreach ($keluarga as $a)
                                <option value="{{$a->nama_keluarga}}">{{$a->nama_keluarga}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Jenis File</label>
                              <select class="form-control" name="jns_file" required>
                                <option class="text-muted" value="">Pilih Jenis File</option>
                                @foreach ($jns_file as $a)
                                <option value="{{$a->nama_jns_file}}">{{$a->nama_jns_file}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Jenis File</label>
                              <select class="form-control" name="tipe" required>
                                <option value="Foto Copy">Foto Copy</option>
                                <option value="Asli">Asli</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>File</label>
                              <input type="file" class="form-control" name="file" placeholder="File" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        @endif
@endsection

@section('footer')
    <!-- data-table js -->
    <script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/jszip.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/vfs_fonts.js')}}"></script>
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    
    <script src="{{url('assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js')}}"></script>

    <script>
    $('#anggota-keluarga').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'excelHtml5',
            exportOptions: {
                columns: ':visible'
            }
        }, 'colvis']
    });
    </script>
@endsection