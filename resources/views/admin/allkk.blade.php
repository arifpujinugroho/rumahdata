@extends('layout.master')

@section('title')
Daftar KK
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
<div class="row">
<div class="col-sm-12">
<!-- HTML5 Export Buttons table start -->
<div class="card">
    <div class="card-header table-card-header">
        <h5>Daftar KK</h5>
        <button class="btn btn-sm btn-success f-right" data-toggle="modal" data-target="#tambah-kk">Tambah KK</button>
    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>Kepala Keluarga</th>
                        <th>NIK</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($allkk as $kk)
                    <tr>
                        <td>{{$kk->nama_kk}}</td>
                        <td>{{$kk->no_kk}}</td>
                        <td>{{$kk->rt}}</td>
                        <td>{{$kk->rw}}</td>
                        <td>
                            <a href="{{url('admin/kk')}}/{{$kk->id}}"><button class="btn btn-mini btn-warning"><i class="fa fa-eye"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- HTML5 Export Buttons end -->
@endsection

@section('end')
    <!-- Modal -->
    <div class="modal fade" id="tambah-kk" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah KK</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="{{url('admin/addkk')}}" method="post">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <label>Nomer KK</label>
                          <input type="number" class="form-control" name="no_kk" id="no_kk" placeholder="Nomer KK" required>
                        </div>
                        <div class="form-group">
                          <label>Nama Kepala Keluarga</label>
                          <input type="text" class="form-control" name="nama_kk" id="nama_kk" placeholder="Nama Kepala Keluarga" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="number" name="rt" class="form-control" placeholder="RT" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" name="rw" class="form-control" placeholder="RW" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                        <input type="text" class="form-control" name="kel" id="kel" placeholder="Kelurahan" required>
                                </div>
                                <div class="col-sm-6">
                                        <input type="text" class="form-control" name="kec" id="kec" placeholder="Kecamatan" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota/Kabupaten" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="kodepos" id="kodepos" placeholder="Kode Pos" required>
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
@endsection