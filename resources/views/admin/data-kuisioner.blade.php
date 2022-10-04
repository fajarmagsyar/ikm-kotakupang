@extends('admin.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Data Kuisioner</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admn">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Kuisioner</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                {{-- <div class="col-7">
                        <div class="text-end upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/xtremeadmin/"
                                class="btn btn-danger text-white" target="_blank">Upgrade to Pro</a>
                        </div>
                    </div> --}}
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mx-auto">
                <div class="col-lg-8 col-sm-12 mx-auto">
                    <div class="card shadow-sm" style="border-radius: 30px">
                        <div class="card-body">
                            <h4 class="card-title m-t-10">{{ $opd->nama_opd }}</h4>
                            <h6 class="card-subtitle">{{ $opd->nama_singkat }}</h6>
                            <div class="row">
                                <div class="col-4">
                                    <font class="font-medium"><i class="mdi mdi-account"></i> 254 Responden
                                    </font>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row px-4">
                            <div class="col-sm-12 col-lg-6 mx-auto">
                                <a href="#createQR">
                                    <div class="card bg-orange" style="border-radius: 20px">
                                        <div class="card-body text-center text-white">
                                            <i class="mdi mdi-file-document" style="font-size: 40px"></i>
                                            <h5>Lihat Laporan Kuisioner</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-12 col-lg-6 mx-auto">
                                <a href="#createQR">
                                    <div class="card bg-primary" style="border-radius: 20px">
                                        <div class="card-body text-center text-white">
                                            <i class="mdi mdi-qrcode-scan" style="font-size: 40px"></i>
                                            <h5>Generate QR Code</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    @endsection
