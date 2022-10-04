<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Index Kepuasan Masyarakat - KOTA KUPANG</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="/assets/img/favicon.png" rel="icon" />
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <link href="/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link href="/assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid" style="display: flex; flex-direction: column; justify-content: space-between;">
        <div class="container">

            <div class="row pt-4">
                <div class="container my-4 text-center">
                    <img src="/assets/img/logo.png" style="max-width: 100px" alt="">
                    <h3>Login IKM</h3>
                </div>
                <div class="col-lg-4 mx-auto my-auto">
                    <div class="card text-center shadow-lg px-3" style="border-radius: 10px">
                        <div class="card-body">
                            <form action="/admn/auth" method="post">
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example1">Email</label>
                                    <input type="email" id="form1Example1" name="mail"
                                        placeholder="contoh@kupangkota.go.id" class="form-control" />
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example2">Password</label>
                                    <input type="password" id="form1Example2" name="password" class="form-control" />
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                {{-- <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="form1Example3" checked />
                                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div> --}}

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- ======= Footer ======= -->
        <footer style="margin-top: 150px">
            <div class="footer-top">
                <div class="container d-md-flex py-4">
                    <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>IKM - Kota Kupang</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            Designed by <a href="http://esc17.herokuapp.com" target="_blank">Diskominfo Dev Team</a>
                        </div>
                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="https://www.instagram.com/diskominfokotakupang/" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCHosuxTzJQQkJgITmfFJLrA" target="_blank"
                            class="youtube"><i class="bx bxl-youtube"></i></a>
                    </div>
                </div>
        </footer>
    </div>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
        integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if (session()->has('error'))
        <script>
            Swal.fire({
                title: "Login Gagal",
                text: "{{ session('error') }}",
                icon: "error",
                confirmButtonText: "Ok",
            });
        </script>
    @endif
</body>

</html>
