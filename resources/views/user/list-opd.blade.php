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

                    @foreach ($opd as $r)
                        <div class="col-lg-3 mx-auto mb-3">
                            <div class="card text-center shadow-lg" style="border-radius: 30px">
                                <div class="card-body">
                                    <h5 class="card-title mb-0">{{ $r->nama_singkat }}</h5>
                                    <span class="card-title text-muted" style="font-size: 13px; line-height: 0">
                                        {{ $r->nama_opd }}
                                    </span>
                                    <p class="card-text mt-2">
                                        <strong>Responden</strong> ( {{ $r->total }} <i class="bx bxs-user"></i>)
                                        {{-- <br> --}}
                                        {{-- <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star-half"></i> --}}
                                    </p>
                                    {{-- <a href="/list-opd/pupr" class="btn text-white"
                                        style="border-radius: 100px; background-color: #007aff"><i
                                            class="bx bx-id-card"></i></a> --}}
                                    <a href="list-opd/pupr/survey" class="btn text-white align-middle"
                                        style="border-radius: 100px; background-color:rgb(210, 68, 68)"><i
                                            class="bx bxs-star"></i> <span style="font-size: 14px">Isi Kuisioner</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endsection
