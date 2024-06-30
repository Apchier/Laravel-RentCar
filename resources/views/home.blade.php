@extends('layout.template')
@section('title', 'Home - Rent Car')

@section('content')
    @if (Auth::check() && Auth::user()->role === 'admin')
        @include('layout.card')
    @endif
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <img src="{{ asset('assets/img/bannerhome.png') }}" class="img-fluid" alt="...">
            <div id="about" class="about" style="border-radius: 10px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4" style="padding-top: 20px">
                            <div class="titlepage">
                                <h2>Our Rent Cars</h2>
                                <p style="text-align: justify;">
                                    Selamat datang di Rental Cars, destinasi utama Anda untuk menyewa mobil sport mewah dan berkinerja tinggi. Kami bangga menawarkan koleksi mobil sport pilihan yang dirancang untuk memenuhi hasrat Anda akan kecepatan, presisi, dan keanggunan. Baik Anda pecinta mobil klasik yang abadi atau model terbaru yang canggih, kami memiliki sesuatu yang spesial untuk Anda.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-12">
                                <div id="carCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets/img/1.png') }}" class="d-block w-100" alt="Car 1">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/2.png') }}" class="d-block w-100" alt="Car 2">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/3.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/4.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/5.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/6.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/7.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/8.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/9.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev btn-lightblue" type="button"
                                        data-bs-target="#carCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next btn-lightblue" type="button"
                                        data-bs-target="#carCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="rental" class="rental bottom_cross5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <p style="text-align: justify;">Temukan koleksi mobil sport pilihan kami di Rental Cars,
                                    dipilih dengan cermat untuk
                                    penggemar kendaraan. Dari klasik abadi hingga model terbaru, setiap mobil kami
                                    menggabungkan presisi, kekuatan, dan keanggunan. Nikmati sensasi mengemudi yang tak
                                    tertandingi, apakah Anda mencari percepatan atau kehalusan dalam menikung. Pilihannya
                                    luas, menggabungkan kinerja tinggi dengan kemewahan untuk pengalaman perjalanan yang
                                    memikat dan tak terlupakan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
