@extends('layouts.layout')
@section('main')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Pop Tansu</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Web aplikasi pemesanan ketan susu</h1>
                    <p class="text-white mb-4 animated slideInRight">Menjaga mood anda</p>
                    <a href="#kontak" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Kontak kami</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{asset('img/hero-img.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- About Start -->
    <div class="container-fluid py-5" id="tentang">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/about-img.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Tentang</div>
                    <h1 class="mb-4">Web aplikasi pemesanan ketan susu</h1>
                    <p class="mb-4">Kami percaya tanpa menggunakan aplikasi pihak ketiga untuk pemesanan ketan susu secara online, kami dapat menjual ketan susu dengan harga terjangkau</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5" id="layanan">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Layanan</div>
                    <h1 class="mb-4">Atasi masalah gangguan mental dengan ketan susu</h1>
                    <p class="mb-4">Ketan susu tidak dapat menyelesaikan masalah anda namun mampu mengembalikan mood anda sehingga lebih ceria dalam menghadapi berbagai masalah</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-robot fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Ketan</h5>
                                        <p>Kami menggunakan ketan putih premium untuk menjaga kualitas</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-power-off fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Kental manis</h5>
                                        <p>Kami menggunakan kental manis premium untuk rasa yang lebih dahsyat saat di makan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-graduation-cap fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Toping</h5>
                                        <p>Kami menggunakan berbagai toping seperti keju, cokelat, dan lainnya.<p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-brain fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Pandan dan santen</h5>
                                        <p>Pandan kami rawat sendiri untuk hasil yang maksimal, dan menggunakan santen premium untuk menjaga kualitas rasa<p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5" id="kontak">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border text-white rounded-pill text-primary px-3 mb-3">Kontak</div>
                <h1 class="mb-4 text-white">Jika ada kritik untuk pengembangan, tolong hubungi kami</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Ketik nama">
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Ketik email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Ketik subjek">
                                        <label for="subject">Subjek</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Ketik pesan" id="message" style="height: 150px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-warning text-white w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
@endsection