@extends('layout.master')

@section('title')
Admin Dashboard
@endsection

@section('content')
<!-- Page-header start -->
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont-clip-board bg-c-yellow"></i>
                <div class="d-inline">
                    <h4>Selamat Datang Admin</h4>
                    <span>Halaman Utama Sistem Rumah Data</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
        </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
@endsection