<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kurnia Rental Mobil</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
    <style>
        .background-section {
            background-image: url('images/Bg_Rental.jpg'); /* Ganti dengan path gambar yang Anda inginkan */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: rgb(255, 250, 250); /* Opsional, tergantung pada gambar dan kontras teks */
            padding: 20px; /* Opsional, menambah ruang di dalam section */
        }

        .background-section h6,
        .background-section p,
        .background-section a {
            color: rgb(255, 255, 255); /* Menyesuaikan warna teks agar kontras dengan gambar latar */
        }

        .background-section hr {
            background-color: rgb(255, 255, 255); /* Menyesuaikan warna garis horizontal */
        }
    </style>


</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="{{ route('homepage') }}">KurniaRental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    @yield('content')

    <!-- Footer -->

    {{-- <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-dark" style="background-color: rgb(221, 221, 221)">
            <!-- Left -->
            <div class="me-5">
                <span>Terhubung dengan kami di jejaring sosial :</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="background-section">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Nama Perusahaan</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Kami siap membantu Anda membuat perjalanan wisata Anda lebih menyenangkan dan tidak terlupakan.

                            Jangan ragu untuk memilih kami sebagai penyedia jasa sewa transportasi lepas kunci di Tulungagung.

                            Kami siap memberikan layanan terbaik
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Alamat</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Jln. Letjend Suprapto No.104 Kepatihan, Tulungagung</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Email</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">kurniarental@gmail.com</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact Person</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-phone mr-3"></i> Admin 1 : 081 554 883 042</p>
                        <p><i class="fas fa-print mr-3"></i> Admin 2 : 085 654 321 789</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
                    <!-- Copyright -->
        <div class="text-center text-white p-3">
            © 2024 Copyright
            <a class="text-white" href="https://mdbootstrap.com/">KurniaRental.com</a>
        </div>
        <!-- Copyright -->
        </section>
        <!-- Section: Links  -->
    </footer> --}}
    <!-- Di atas Adalah code footer yang pertama-->

    <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
        <!-- Section: Social media -->

        {{-- <section class="d-flex justify-content-center justify-content-lg-between p-4 text-dark" style="background-color: rgb(221, 221, 221)">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Terhubung dengan kami di jejaring sosial :</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section> --}}
        <!--Di atas Adalah Code section yang pertama-->
        <section class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center p-4 text-dark" style="background-color: rgb(221, 221, 221)">
            <!-- Left -->
            <div class="mb-3 mb-lg-0">
                <span>Terhubung dengan kami di jejaring sosial :</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="text-dark me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>


        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="background-section">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Nama Perusahaan</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffffff; height: 2px" />
                        <p>
                            Kami siap membantu Anda membuat perjalanan wisata Anda lebih menyenangkan dan tidak terlupakan.
                            Jangan ragu untuk memilih kami sebagai penyedia jasa sewa transportasi lepas kunci di Tulungagung.
                            Kami siap memberikan layanan terbaik
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Alamat</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffffff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Jln. Letjend Suprapto No.104 Kepatihan, Tulungagung</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Email</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffffff; height: 2px" />
                        <p>
                            <a href="mailto:kurniarental@gmail.com" class="text-white">kurniarental@gmail.com</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact Person</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffffff; height: 2px" />
                        <p><i class="fas fa-phone mr-3"></i> Admin 1 : 081 554 883 042</p>
                        <p><i class="fas fa-print mr-3"></i> Admin 2 : 085 654 321 789</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright
            <a class="text-dark" href="https://mdbootstrap.com/">KurniaRental.com</a>
        </div>
        <!-- Copyright -->
    </footer>


    <!-- Footer -->

    <!-- Bootstrap core JS-->
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
</body>

</html>
