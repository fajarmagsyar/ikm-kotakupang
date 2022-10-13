@extends('user.main')
@section('content')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="opd-terbaik" class="about pb-0">
            <div class="container">
                <div class="section-title">
                    <br><br>
                    <h2 style="color: white">Form Indeks Kepuasan masyarakat</h2>
                    <p>
                        {{ $opd->nama_opd }}
                    </p>
                </div>
            </div>
        </section>

        <section class="list-opd">
            <form action="/list-opd/{{ $opd->nama_singkat }}/survey/store" method="post">
                @csrf
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 mx-auto mb-3" data-aos="fade-up">
                            <div class="card shadow-lg" style="border-radius: 30px">
                                <div class="card-body p-4">

                                    <h4 class="card-title mb-0"><a href="/list-opd"><i class="bx bx-arrow-back"></i></a>
                                        {{ $opd->nama_opd }}</h4>
                                    <span class="card-title text-muted"
                                        style="font-size: 15px; line-height: 0">{{ $opd->nama_singkat }}</span>
                                    <p class="card-text" style="font-size: 12px">
                                        <strong>Responden</strong> ({{ $opd->total }} <i class="bx bxs-user"></i>)
                                    </p>


                                    {{-- <p class="card-text" style="font-size: 12px">
                                        Rating (4.6 | 12 <i class="bx bxs-user"></i>)
                                        <br>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star-half"></i> --}}
                                    </p>
                                    <hr>
                                    <br>
                                    <h4 class="text-center my-4" data-aos="fade-up">
                                        Survey Kepuasan Masyarakat Terhadap
                                        Pelayanan
                                        Publik
                                        <div>
                                            <a class="btn btn-success btn-sm mb-2 mt-2" style="border-radius: 20px;"
                                                href="whatsapp://send?text=Mari isi kuisioner pelayanan dari {{ $opd->nama_opd }} di link berikut: {{ url()->current() }}">
                                                <i class="bx bxl-whatsapp"
                                                    style="font-size: 20px; vertical-align: middle"></i>
                                                <span style="font-size: 13px">Whatsapp</span>
                                            </a>
                                            <a class="btn btn-sm mb-2 mt-2"
                                                style="border-radius: 20px; background-color:#007aff; color: white"
                                                href="https://telegram.me/share/url?url={{ url()->current() }}&text=Mari isi kuisioner pelayanan dari {{ $opd->nama_opd }} pada link diatas.">
                                                <i class="bx bxl-telegram"></i>
                                                <span style="font-size: 13px">Telegram</span>
                                            </a>
                                            <a class="btn btn-sm mb-2 mt-2"
                                                style="border-radius: 20px; background-color:#b02626; color: white"
                                                href="mailto:?subject=Mari isi Kuisioner IKM ({{ $opd->nama_singkat }})&amp;body=Mari isi kuisioner pelayanan dari {{ $opd->nama_opd }} di link berikut: {{ url()->current() }}">
                                                <i class="bx bxs-envelope"></i>
                                                <span style="font-size: 13px">Email</span>
                                            </a>
                                        </div>
                                    </h4>
                                    <br>
                                    <div class="container" data-aos="fade-up">
                                        <div class="row">
                                            <h6><strong>Data Masyarakat (Responden)</strong></h6>

                                            <div class="col-lg-12 mt-4 mt-md-0">
                                                <div class="form-floating mb-3">
                                                    <input type="hidden" value="Nama" name="q_nama">
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        placeholder="Nama Anda">
                                                    <label for="nama">Nama Anda</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="hidden" value="Umur" name="q_umur">
                                                            <input type="number" class="form-control" id="umur"
                                                                name="umur" placeholder="umur Anda">
                                                            <label for="umur">Umur Anda</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="hidden" value="Jenis Kelamin" name="q_jk">
                                                            <select name="jk" class="form-select" id="jk"
                                                                placeholder="Jenis Kelamin">
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                            <label for="jk">Jenis Kelamin</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="hidden" value="Pendidikan Terakhir"
                                                                name="q_pendidikan">
                                                            <select name="pendidikan_terakhir" class="form-select"
                                                                id="pendidikan_terakhir" placeholder="Jenis Kelamin">
                                                                <option value="SD Kebawah">SD Kebawah</option>
                                                                <option value="SLTP">SLTP</option>
                                                                <option value="SLTA">SLTA</option>
                                                                <option value="D1-D2-D4">D1-D2-D4</option>
                                                                <option value="S1">S1</option>
                                                                <option value="S2 Keatas">S2 Keatas</option>
                                                            </select>
                                                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="hidden" value="Pekerjaan Utama"
                                                                name="q_pekerjaan">
                                                            <select name="pekerjaan_utama" class="form-select"
                                                                id="pekerjaan_utama" placeholder="Jenis Kelamin">
                                                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                                <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan
                                                                </option>
                                                                <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa
                                                                </option>
                                                                <option value="Lainnya">Lainnya</option>
                                                            </select>
                                                            <label for="pekerjaan_utama">Pekerjaan Utama</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="mt-3">
                                                    <strong>
                                                        Pendapat Responden Tentang Pelayanan Publik
                                                    </strong>
                                                </h6>
                                                {{-- Q1 --}}
                                                <div class="mb-3">
                                                    <p><strong>1.</strong> Bagaimana menurut Saudara tentang kemudahan
                                                        prosedur pelayanan di
                                                        unit ini?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana menurut Saudara tentang kemudahan prosedur pelayanan di unit ini?"
                                                        name="q1">
                                                    <input class="form-check-input" type="radio" name="a1"
                                                        value="Sangat Mudah" required />
                                                    Sangat Mudah
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a1"
                                                        value="Mudah" required />
                                                    Mudah
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a1"
                                                        value="Cukup Mudah" required />
                                                    Cukup Mudah
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a1"
                                                        value="Tidak Mudah" required />
                                                    Tidak Mudah
                                                </div> <br>

                                                {{-- Q2 --}}
                                                <div class="mb-3">
                                                    <p><strong>2.</strong>Bagaimana menurut Saudara tentang kesesuaian
                                                        persyaratan pelayanan dengan jenis pelayanan?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana menurut Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan?"
                                                        name="q2">
                                                    <input class="form-check-input" type="radio" name="a2"
                                                        value="Sangat Sesuai" required />
                                                    Sangat Sesuai
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a2"
                                                        value="Sesuai" required />
                                                    Sesuai
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a2"
                                                        value="Cukup Sesuai" required />
                                                    Cukup Sesuai
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a2"
                                                        value="Tidak Sesuai" required />
                                                    Tidak Sesuai
                                                </div> <br>

                                                {{-- Q3 --}}
                                                <div class="mb-3">
                                                    <p><strong>3.</strong>Bagaimana pendapat Saudara tentang penjelasan
                                                        petugas yang melayani?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana pendapat Saudara tentang penjelasan petugas yang melayani?"
                                                        name="q3">
                                                    <input class="form-check-input" type="radio" name="a3"
                                                        value="Sangat Jelas" required />
                                                    Sangat Jelas
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a3"
                                                        value="Jelas" required />
                                                    Jelas
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a3"
                                                        value="Cukup Jelas" required />
                                                    Cukup Sesuai
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a3"
                                                        value="Tidak Jelas" required />
                                                    Tidak Jelas
                                                </div> <br>

                                                {{-- Q4 --}}
                                                <div class="mb-3">
                                                    <p><strong>4.</strong>Bagaimana pendapat Saudara tentang kedisiplinan
                                                        petugas dalam melayani?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana pendapat Saudara tentang kedisiplinan petugas dalam melayani?"
                                                        name="q4">
                                                    <input class="form-check-input" type="radio" name="a4"
                                                        value="Sangat Disiplin" required />
                                                    Sangat Disiplin
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a4"
                                                        value="Disiplin" required />
                                                    Disiplin
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a4"
                                                        value="Cukup Disiplin" required />
                                                    Cukup Disiplin
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a4"
                                                        value="Tidak Disiplin" required />
                                                    Tidak Sesuai
                                                </div> <br>

                                                {{-- Q5 --}}
                                                <div class="mb-3">
                                                    <p><strong>5.</strong>Bagaimana pendapat Saudara tentang kecepatan
                                                        petugas yang melayani?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana pendapat Saudara tentang kecepatan petugas yang melayani?"
                                                        name="q5">
                                                    <input class="form-check-input" type="radio" name="a5"
                                                        value="Sangat Cepat" required />
                                                    Sangat Cepat
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a5"
                                                        value="Cepat" required />
                                                    Cepat
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a5"
                                                        value="Cukup Cepat" required />
                                                    Cukup Cepat
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a5"
                                                        value="Tidak Cepat" required />
                                                    Tidak Cepat
                                                </div> <br>

                                                {{-- Q6 --}}
                                                <div class="mb-3">
                                                    <p><strong>6.</strong>Bagaimana pendapat Saudara tentang kesopanan dan
                                                        keramahan petugas dalam memberikan pelayanan?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana pendapat Saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan?"
                                                        name="q6">
                                                    <input class="form-check-input" type="radio" name="a6"
                                                        value="Sangat Sopan dan Ramah" required />
                                                    Sangat Sopan dan Ramah
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a6"
                                                        value="Sopan dan Ramah" required />
                                                    Sopan dan Ramah
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a6"
                                                        value="Cukup Sopan dan Ramah" required />
                                                    Cukup Sopan dan Ramah
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a6"
                                                        value="Tidak Sopan dan Ramah" required />
                                                    Tidak Sopan dan Ramah
                                                </div> <br>

                                                {{-- Q7 --}}
                                                <div class="mb-3">
                                                    <p><strong>7.</strong>Bagaimana pendapat Saudara tentang tanggung jawab
                                                        petugas dalam memberikan pelayanan?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana pendapat Saudara tentang tanggung jawab petugas dalam memberikan pelayanan?"
                                                        name="q7">
                                                    <input class="form-check-input" type="radio" name="a7"
                                                        value="Sangat Bertanggung Jawab" required />
                                                    Sangat Bertanggung Jawab
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a7"
                                                        value="Bertanggung Jawab" required />
                                                    Bertanggung Jawab
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a7"
                                                        value="Cukup Bertanggung Jawab" required />
                                                    Cukup Bertanggung Jawab
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a7"
                                                        value="Tidak Bertanggung Jawab" required />
                                                    Tidak Bertanggung Jawab
                                                </div> <br>

                                                {{-- Q8 --}}
                                                <div class="mb-3">
                                                    <p><strong>8.</strong>Bagaimana pendapat Saudara tentang keadilan
                                                        petugas dalam memberikan pelayanan?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana pendapat Saudara tentang keadilan petugas dalam memberikan pelayanan?"
                                                        name="q8">
                                                    <input class="form-check-input" type="radio" name="a8"
                                                        value="Sangat Adil" required />
                                                    Sangat Adil
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a8"
                                                        value="Adil" required />
                                                    Adil
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a8"
                                                        value="Cukup Adil" required />
                                                    Cukup Adil
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a8"
                                                        value="Tidak Adil" required />
                                                    Tidak Adil
                                                </div> <br>

                                                {{-- Q9 --}}
                                                <div class="mb-3">
                                                    <p><strong>9.</strong>Bagaimana menurut Saudara tentang dukungan
                                                        infrastruktur penunjang pelayanan yang ada?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana menurut Saudara tentang dukungan infrastruktur penunjang pelayanan yang ada?"
                                                        name="q9">
                                                    <input class="form-check-input" type="radio" name="a9"
                                                        value="Sangat Mendukung" required />
                                                    Sangat Mendukung
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a9"
                                                        value="Mendukung" required />
                                                    Mendukung
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a9"
                                                        value="Cukup Mendukung" required />
                                                    Cukup Mendukung
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a9"
                                                        value="Tidak Mendukung" required />
                                                    Tidak Mendukung
                                                </div> <br>

                                                {{-- Q10 --}}
                                                <div class="mb-3">
                                                    <p><strong>10.</strong>Bagaimana menurut Saudara tentang keamanan dan
                                                        kenyamanan berada di lingkungan unit pelayanan?</p>
                                                    <input type="hidden"
                                                        value="Bagaimana menurut Saudara tentang keamanan dan kenyamanan berada di lingkungan unit pelayanan?"
                                                        name="q10">
                                                    <input class="form-check-input" type="radio" name="a10"
                                                        value="Sangat Aman dan Nyaman" required />
                                                    Sangat Aman dan Nyaman
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a10"
                                                        value="Aman dan Nyaman" required />
                                                    Aman dan Nyaman
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a10"
                                                        value="Cukup Aman dan Nyaman" required />
                                                    Cukup Aman dan Nyaman
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="a10"
                                                        value="Tidak Aman dan Nyaman" required />
                                                    Tidak Aman dan Nyaman
                                                </div> <br>

                                                <button type="submit" class="btn text-white float-end"
                                                    style="border-radius: 100px; background-color: #007aff">
                                                    <i class="bx bx-mail-send"></i>
                                                    Kirim Kuisioner
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    @endsection
