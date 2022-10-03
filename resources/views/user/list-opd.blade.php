@extends('user.main')
@section('content')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="opd-terbaik" class="about pb-0">
            <div class="container">
                <div class="section-title">
                    <br><br>
                    <h2 style="color: white">List OPD</h2>
                    <p>
                        Organisasi Pemerintah Daerah dengan layanan terbaik di Kota Kupang
                        menurut penilaian masyarakat
                    </p>
                </div>
            </div>
        </section>

        <section class="list-opd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mx-auto">
                        <div class="card text-center shadow" style="border-radius: 30px">
                            <div class="card-body">
                                <h5 class="card-title mb-0">DISKOMINFO</h5>
                                <span class="card-title text-muted" style="font-size: 13px">Dinas Komunikasi dan
                                    Informatika</span>
                                <p class="card-text mt-3">
                                    <br>
                                    Rating (4.6)
                                    <br>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star-half"></i>
                                </p>
                                <a href="/list-opd/kominfo" class="btn text-white"
                                    style="border-radius: 100px; background-color: #007aff"><i
                                        class="bx bx-id-card"></i></a>
                                <a href="list-opd/kominfo/survey" class="btn text-white"
                                    style="border-radius: 100px; background-color:rgb(210, 68, 68)"><i
                                        class="bx bx-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
