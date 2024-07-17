@extends('layout.contact')

@section('content')
    <header class="py-5">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active bg-dark">
                    <img src="{{ asset('images/sewa-mobil.jpg') }}" class="d-block img-fluid" alt="wallpaper_thinkpad"
                        width="1500" height="400">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item bg-dark">
                    <img src="{{ asset('images/nama-rental-mobil-2.jpg') }}" class="d-block img-fluid" alt="wallpaper_thinkpad"
                        width="1500" height="400">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/sewa-motor.jpg') }}" class="d-block img-fluid" alt="wallpaper_thinkpad"
                        width="1500" height="400">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            @if (session()->has('message'))
                <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-2">
                                    <div class="name-input form-group">
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" placeholder="Isikan nama lengkap"
                                            required="required" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 mb-2">
                                    <div class="email-input form-group">
                                        <input type="text" name="email" class="form-control"
                                            value="{{ old('email') }}" placeholder="Isikan alamat email"
                                            required="required" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-2">
                                    <div class="subject-input form-group">
                                        <input type="text" name="subject" class="form-control"
                                            value="{{ old('subject') }}" placeholder="Isikan subject email"
                                            required="required" />
                                    </div>
                                </div>
                            </div>

                            <div class="message-input form-group mb-3">
                                <textarea name="pesan" cols="30" rows="10" placeholder="Isikan pesan anda" class="form-control"></textarea>
                            </div>

                            <div class="input-submit form-group">
                                <button type="submit" style="height: 50px; width: 400px; margin: 0 auto"
                                    class="d-block btn btn-primary">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
