@extends('layout.frontend')

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
                        <h5>RENTAL TRANSPORTASI</h5>
                        <p>PT.AngkutinAja.ID adalah pilihan terbaik bagi Anda yang mencari jasa sewa trasnportas murah dan terpercaya di Tulungagung kami hadir sebagai solusi terbaik. Kami menawarkan jasa sewa transportasi dengan harga murah dan kualitas terbaik.</p>
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
    {{-- <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h3 class="text-center mb-5">Daftar Kendaraan</h3>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($cars as $car)
                    <div class="col mb-5">
                        <div class="card h-100 bg-red">
                            <!-- Sale badge-->
                            <div class="badge badge-custom {{ $car->status == 'tersedia' ? 'bg-warning' : 'bg-success' }} text-white position-absolute"
                                style="top: 0; right: 0">
                                {{ $car->status }}
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top img-fluid" src="{{ Storage::url($car->gambar) }}" alt="{{ $car->nama_mobil }}" />
                            <!-- Product details-->
                            <div class="card-body card-body-custom pt-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $car->nama_mobil }}</h5>
                                    <!-- Product price-->
                                    <div class="rent-price mb-3">
                                        <span class="text-primary">Rp.{{ number_format($car->harga_sewa) }}/</span>day
                                    </div>
                                    <ul class="list-unstyled list-style-group">
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Bahan Bakar</span>
                                            <span style="font-weight: 600">{{$car->bahan_bakar}}</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Jumlah Kursi</span>
                                            <span style="font-weight: 600">{{$car->jumlah_kursi}}</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Transmisi</span>
                                            <span style="font-weight: 600">{{$car->transmisi}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-info mt-auto text-white" href="{{route('detail', $car->slug)}}"> Detail Sewa </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h3 class="text-center mb-5">Daftar Kendaraan</h3>
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($cars as $car)
                    <div class="col mb-5">
                        <div class="card h-100 bg-light">
                            <!-- Sale badge-->
                            <div class="badge badge-custom {{ $car->status == 'tersedia' ? 'bg-warning' : 'bg-success' }} text-white position-absolute"
                                style="top: 0; right: 0">
                                {{ $car->status }}
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top img-fluid" src="{{ Storage::url($car->gambar) }}" alt="{{ $car->nama_mobil }}" style="object-fit: cover; height: 200px;" />
                            <!-- Product details-->
                            <div class="card-body pt-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $car->nama_mobil }}</h5>
                                    <!-- Product price-->
                                    <div class="rent-price mb-3">
                                        <span class="text-primary">Rp.{{ number_format($car->harga_sewa) }}/</span>day
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Bahan Bakar</span>
                                            <span class="fw-bold">{{$car->bahan_bakar}}</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Jumlah Kursi</span>
                                            <span class="fw-bold">{{$car->jumlah_kursi}}</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Transmisi</span>
                                            <span class="fw-bold">{{$car->transmisi}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-info mt-auto text-white" href="{{ route('detail', $car->slug) }}">Detail Sewa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
