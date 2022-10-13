@extends('admin.main')
@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admn">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <center class="m-t-30"> <img src="/assets/img/logo.png" class="rounded-circle" width="150" />
                                <a href="#" data-bs-toggle="modal" data-bs-target="#gantiFotoModal">
                                    <h6 class="card-subtitle"><i class="mdi mdi-pencil"></i> Edit Logo</h6>
                                </a>
                                <h4 class="card-title m-t-10">{{ $opd->nama_singkat }}</h4>
                                <h6 class="card-subtitle">{{ $opd->nama_opd }}</h6>
                                <div class="row text-center justify-content-md-center">
                                    <div class="col-4">
                                        <font class="font-medium"><i class="mdi mdi-account"></i> {{ $opd->total }}
                                            Responden
                                        </font>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="card-body"> <small class="text-muted">Email address </small>
                            <h6>{{ auth()->user()->mail }}</h6> <small class="text-muted p-t-30 db">No HP</small>
                            <h6>{{ auth()->user()->nohp }}</h6> <small class="text-muted p-t-30 db">Alamat</small>
                            <h6>{{ $opd->alamat }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h5>Data Admin</h5>
                            <form class="form-horizontal form-material mx-2" action="/admn/dashboard/profile-edit"
                                method="post">
                                @csrf
                                <input type="hidden" name="admin_id" value="{{ auth()->user()->admin_id }}">
                                <input type="hidden" name="opd_id" value="{{ auth()->user()->opd_id }}">
                                <div class="form-group">
                                    <label class="col-md-12">Nama Admin</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ auth()->user()->nama }}"
                                            class="form-control form-control-line" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="contoh@kupangkota.go.id"
                                            value="{{ auth()->user()->mail }}" class="form-control form-control-line"
                                            name="example-email" id="example-email" name="mail" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">No HP</label>
                                    <div class="col-md-12">
                                        <input type="number" placeholder="082XXXXXXXXX" value="{{ auth()->user()->nohp }}"
                                            class="form-control form-control-line" name="example-email" id="example-email"
                                            name="nohp" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="password">
                                    </div>
                                    <span class="text-sm text-muted">*Kosongi jika tidak ingin mengubah
                                        password</span>
                                </div>

                                <h5>Data OPD</h5>
                                <div class="form-group">
                                    <label class="col-md-12">Nama OPD</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $opd->nama_opd }}"
                                            class="form-control form-control-line" name="nama_opd" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Singkat</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $opd->nama_singkat }}"
                                            class="form-control form-control-line" name="nama_singkat" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Alamat</label>
                                    <div class="col-md-12">
                                        <textarea name="alamat" required rows="3" class="form-control form-control-line">{{ $opd->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Kepala</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $opd->nama_kepala }}"
                                            class="form-control form-control-line" name="nama_kepala">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success text-white float-end"
                                            style="border-radius: 20px"><i class="mdi mdi-update"></i> Update
                                            Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    @endsection
