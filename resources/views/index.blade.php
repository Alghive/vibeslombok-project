@extends('layouts.master')

@section('title', 'Home')
@section('content')

    <!-- Modal Cart -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content cart-modal">
                <!-- Header -->
                <div class="modal-header custom-header">
                    <h5 class="modal-title fw-bold" id="cartModalLabel">
                        <i class="fa fa-shopping-cart me-2 text-primary"></i> Keranjang Saya
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Body -->
                <div class="modal-body">
                    <!-- Item keranjang contoh 1 -->
                    <div class="cart-item d-flex align-items-center border rounded-3 p-3 mb-3 shadow-sm">
                        <input type="checkbox" class="form-check-input me-3">
                        <img src="assets/images/rush-1.png" alt="Toyota Rush" class="rounded me-3"
                            style="width:90px; height:65px; object-fit:cover;">
                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-semibold">Toyota Rush</h6>
                            <small class="text-muted">Automatic • 2018 • 4 Seats</small>
                            <div class="d-flex align-items-center mt-2">
                                <span class="fw-bold text-primary">IDR 350K</span><small class="ms-1">/day</small>
                            </div>
                        </div>
                        <!-- Counter -->
                        <div class="d-flex flex-column align-items-center ms-3">
                            <small class="text-muted mb-1">Day</small>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-success rounded-pill">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input type="text" value="1" class="form-control form-control-sm text-center mx-2"
                                    style="width:50px;">
                                <button class="btn btn-sm btn-outline-success rounded-pill">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item keranjang contoh 2 -->
                    <div class="cart-item d-flex align-items-center border rounded-3 p-3 mb-3 shadow-sm">
                        <input type="checkbox" class="form-check-input me-3">
                        <img src="assets/images/rush-2.png" alt="Toyota Avanza" class="rounded me-3"
                            style="width:90px; height:65px; object-fit:cover;">
                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-semibold">Toyota Avanza</h6>
                            <small class="text-muted">Manual • 2019 • 7 Seats</small>
                            <div class="d-flex align-items-center mt-2">
                                <span class="fw-bold text-primary">IDR 300K</span><small class="ms-1">/day</small>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center ms-3">
                            <small class="text-muted mb-1">Day</small>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-success rounded-pill">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input type="text" value="1" class="form-control form-control-sm text-center mx-2"
                                    style="width:50px;">
                                <button class="btn btn-sm btn-outline-success rounded-pill">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Item keranjang contoh 2 -->
                    <div class="cart-item d-flex align-items-center border rounded-3 p-3 mb-3 shadow-sm">
                        <input type="checkbox" class="form-check-input me-3">
                        <img src="assets/images/rush-2.png" alt="Toyota Avanza" class="rounded me-3"
                            style="width:90px; height:65px; object-fit:cover;">
                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-semibold">Toyota Avanza</h6>
                            <small class="text-muted">Manual • 2019 • 7 Seats</small>
                            <div class="d-flex align-items-center mt-2">
                                <span class="fw-bold text-primary">IDR 300K</span><small class="ms-1">/day</small>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center ms-3">
                            <small class="text-muted mb-1">Day</small>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-success rounded-pill">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input type="text" value="1" class="form-control form-control-sm text-center mx-2"
                                    style="width:50px;">
                                <button class="btn btn-sm btn-outline-success rounded-pill">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                    <!-- Tambahkan item lain sebanyak yang diperlukan -->
                </div>

                <!-- Footer -->
                <div class="modal-footer custom-footer">
                    <div class="fw-bold">
                        Total: <span class="text-primary">IDR 950K</span>
                    </div>
                    <button class="btn btn-primary rounded-pill px-4 position-relative">
                        Checkout
                        <span class="checkout-count badge bg-light text-primary ms-2">3</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Chart End -->

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="#top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Hello</h6>
                            <h2>Welcome to Lombok Vibes</h2>
                            <p>Lombok Vibes is a reliable car rental service provider in Lombok, offering a wide range
                                of vehicle options from city cars to family cars. The company also provides various tour
                                packages to explore the beauty of Lombok.</p>
                            <!-- <div class="main-button-red">
                              <div class="scroll-to-section"><a href="#contact">View More!</a></div>
                          </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <a href="{{ route('detail_wisata') }}" class="item"
                            style="background-image: url('assets/images/pantai-1.png');">
                            <div class="down-content">
                                <h4>Paket Wisata A</h4>
                                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                    vestibulum.</p>
                            </div>
                        </a>

                        <a href="{{ route('detail_wisata') }}" class="item"
                            style="background-image: url('assets/images/airterjun-1.png');">
                            <div class="down-content">
                                <h4>Paket Wisata B</h4>
                                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                    vestibulum.</p>
                            </div>
                        </a>

                        <a href="{{ route('detail_wisata') }}" class="item"
                            style="background-image: url('assets/images/gunung-1.png');">
                            <div class="down-content">
                                <h4>Paket Wisata C</h4>
                                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                    vestibulum.</p>
                            </div>
                        </a>

                        <a href="{{ route('detail_wisata') }}" class="item"
                            style="background-image: url('assets/images/pantai-2.jpg');">
                            <div class="down-content">
                                <h4>Paket Wisata D</h4>
                                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                    vestibulum.</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="upcoming-meetings" id="pemesanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Booking Now</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Wrapper Dua Card -->
                    <div class="booking-card-wrapper d-flex flex-md-row flex-column gap-4">

                        <!-- Card 1: Form Booking -->
                        <div class="card booking-card flex-fill p-4">
                            <div class="tab-content" id="formTabsContent">

                                <!-- Form Rental Mobil -->
                                <div class="tab-pane fade-sync show active" id="form-rental" role="tabpanel">
                                    <form class="row g-3 mt-2 flex-column">
                                        <div class="col-md-12">
                                            <label for="tanggal_rental" class="form-label">Tanggal Sewa</label>
                                            <input type="date" id="tanggal_rental" name="tanggal_rental"
                                                class="form-control" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="durasi" class="form-label">Durasi (hari)</label>
                                            <input type="number" id="durasi" name="durasi" class="form-control"
                                                min="1" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="tipe_mobil" class="form-label">Pilih Mobil</label>
                                            <select id="tipe_mobil" name="tipe_mobil" class="form-select" required>
                                                <option value="">-- Pilih Mobil --</option>
                                                <option value="avanza">Toyota Avanza</option>
                                                <option value="innova">Toyota Innova</option>
                                                <option value="hiace">Toyota Hiace</option>
                                            </select>
                                        </div>

                                        {{-- Add tipe layanan feature --}}
                                        <div class="col-md-12">
                                            <label class="form-label d-block">Tipe Layanan</label>
                                            <div class="d-flex gap-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tipe_layanan"
                                                        id="self_drive" value="self_drive" required>
                                                    <label class="form-check-label" for="self_drive">
                                                        Self-drive
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tipe_layanan"
                                                        id="with_driver" value="with_driver" required>
                                                    <label class="form-check-label" for="with_driver">
                                                        With Driver
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        {{--  --}}
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary w-100">Booking</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Form Paket Wisata -->
                                <div class="tab-pane fade-sync" id="form-wisata" role="tabpanel">
                                    <form class="row g-3 mt-2 flex-column">
                                        <div class="col-md-12">
                                            <label for="tanggal_wisata" class="form-label">Tanggal Berangkat</label>
                                            <input type="date" id="tanggal_wisata" name="tanggal_wisata"
                                                class="form-control" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="paket_wisata" class="form-label">Pilih Paket Wisata</label>
                                            <select id="paket_wisata" name="paket_wisata" class="form-select" required>
                                                <option value="">-- Pilih Paket --</option>
                                                <option value="paket_a">Paket A</option>
                                                <option value="paket_b">Paket B</option>
                                                <option value="paket_c">Paket C</option>
                                                <option value="paket_d">Paket D</option>
                                            </select>
                                        </div>
                                        <!-- Tombol Lihat Detail -->
                                        <div class="col-md-12">
                                            <button class="btn btn-detail" type="button" id="lihatDetailBtn"
                                                class="btn btn-info w-100 mt-2" data-bs-toggle="modal"
                                                data-bs-target="#detailModal" disabled>
                                                <i class="bi bi-info-circle"></i> Detail Paket
                                            </button>
                                        </div>

                                        <!-- Modal Detail Paket -->
                                        <!-- Modal Detail -->
                                        <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true"
                                            data-bs-backdrop="false" data-bs-scroll="true">
                                            <div
                                                class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content shadow-lg border-0">
                                                    <div class="modal-header bg-primary text-white">
                                                        <h5 class="modal-title fw-bold" id="detailModalLabel">Detail
                                                            Paket</h5>
                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body" id="detailModalBody">
                                                        <!-- Isi detail paket muncul lewat JS -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Semua konten detail paket disimpan di HTML (hidden) -->
                                        <div id="paketDetails" class="d-none">

                                            <div id="paket_a_detail">
                                                <h5>Paket Wisata A - Lombok Explore</h5>
                                                <p><b>Itinerary:</b></p>
                                                <img src="assets/images/pantai-1.png" class="img-fluid rounded mb-2">
                                                <p>08:00 Hotel pick-up, perjalanan ke pelabuhan...</p>
                                            </div>

                                            <div id="paket_b_detail">
                                                <h5>Paket Wisata B - Adventure Lombok</h5>
                                                <p><b>Destinasi:</b> Gunung Rinjani, Air Terjun Sendang Gile</p>
                                                <p><b>Fasilitas:</b> Camping Gear, Porter, Guide Gunung</p>
                                            </div>

                                            <div id="paket_c_detail">
                                                <h5>Paket Wisata C - Honeymoon Lombok</h5>
                                                <p>Romantic dinner, Private villa, Spa treatment, dll.</p>
                                            </div>

                                            <div id="paket_d_detail">
                                                <h5>Paket Wisata D - Full Lombok Tour</h5>
                                                <p>Paket komplit ke semua destinasi populer Lombok.</p>
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary w-100">Booking</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <!-- Card 2: Penjelasan + Toggle -->
                        <div class="card booking-info flex-fill p-4">
                            <!-- Toggle Switch -->
                            <ul class="nav nav-pills justify-content-center mb-4" id="bookingTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active px-4 py-2 rounded-pill" data-bs-target="rental"
                                        type="button">
                                        Rental Mobil
                                    </button>
                                </li>
                                <li class="nav-item ms-2" role="presentation">
                                    <button class="nav-link px-4 py-2 rounded-pill" data-bs-target="wisata"
                                        type="button">
                                        Paket Wisata
                                    </button>
                                </li>
                            </ul>

                            <!-- Penjelasan -->
                            <div class="tab-content" id="infoTabsContent">
                                <div class="tab-pane fade-sync show active" id="info-rental" role="tabpanel">
                                    <h5 class="mb-4">Cara Booking Rental Mobil</h5>
                                    <ul class="booking-steps-card">
                                        <li>
                                            <span class="step-icon"><i class="bi bi-calendar2-check-fill"></i></span>
                                            Pilih tanggal sewa dan durasi
                                        </li>
                                        {{-- Modifikasi Teks --}}
                                        <li>
                                            <span class="step-icon"><i class="bi bi-car-front-fill"></i></span>
                                            Pilih tipe mobil dan layanan yang tersedia
                                        </li>
                                        <li>
                                            {{--  --}}
                                            <span class="step-icon"><i class="bi bi-check-circle-fill"></i></span>
                                            Klik tombol <b>Booking</b> untuk konfirmasi
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade-sync" id="info-wisata" role="tabpanel">
                                    <h5 class="mb-4">Cara Booking Paket Wisata</h5>
                                    <ul class="booking-steps-card">
                                        <li>
                                            <span class="step-icon"><i class="bi bi-calendar-fill"></i></span>
                                            Pilih tanggal keberangkatan
                                        </li>
                                        <li>
                                            <span class="step-icon"><i class="bi bi-geo-alt-fill"></i></span>
                                            Pilih paket wisata sesuai keinginan
                                        </li>
                                        <li>
                                            <span class="step-icon"><i class="bi bi-check-circle-fill"></i></span>
                                            Klik tombol <b>Booking</b> untuk konfirmasi
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="our-facts" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-xxl">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
                                    <!-- <div class="position-relative h-100">
                                <img
                                  class="img-fluid position-absolute w-100 h-100"
                                  src="assets/images/pantai-2.jpg"
                                  alt=""
                                  style="object-fit: cover"
                                />
                              </div> -->
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center">
                                        <img class="img-fluid" src="assets/images/mobil-3.png" alt="Mobil"
                                            style="object-fit: contain; max-height: 100%;" />
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp text-dark" data-wow-delay="0.3s">
                                    <h1 class="mb-4 text-primary">About Us</h1>
                                    <p class="mb-4 text-dark">
                                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam amet diam et eos. Clita erat ipsum et lorem et sit.
                                    </p>
                                    <p class="mb-4 text-dark">
                                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                        lorem sit clita duo justo magna dolore erat amet
                                    </p>
                                    <div class="row gy-2 gx-4 mb-4">
                                    <div class="col-sm-6 d-flex align-items-center">
                                        <i class="bi bi-clock-fill text-dark me-3 fs-5"></i>
                                        <span>24 Hours Service</span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center">
                                        <i class="bi bi-truck text-dark me-3 fs-5"></i>
                                        <span>On Time Pickup & Delivery</span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center">
                                        <i class="bi bi-person-badge-fill text-dark me-3 fs-5"></i>
                                        <span>Professional Staff & Driver</span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center">
                                        <i class="bi bi-brush-fill text-dark me-3 fs-5"></i>
                                        <span>Guaranteed Clean & Tidy</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Service</h2>
                        <p class="text-dark">
                            Providing service with a swift response, seamless experience, and a diverse fleet of
                            vehicles available for self-drive or with a professional driver. Your satisfaction is our
                            top priority.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="container-xxl">
                        <div class="container">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <a href="{{ route('tour-package') }}" class="text-decoration-none text-dark">
                                        <div class="service-item text-center pt-3">
                                            <div class="p-4">
                                                <i class="fa fa-3x fa-map-marker text-primary mb-4"></i>
                                                <h5 class="mb-3">Tour Package</h5>
                                                <p>Pickup and Delivery</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <a href="{{ route('rent-car') }}" class="text-decoration-none text-dark">
                                        <div class="service-item text-center pt-3">
                                            <div class="p-4">
                                                <i class="fa fa-3x fa-car text-primary mb-4"></i>
                                                <h5 class="mb-3">Rent Car</h5>
                                                <p>Guaranteed clean and tidy</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name"
                                                placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject"
                                                placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..."
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                                NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>010-020-0340</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>info@meeting.edu</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>www.meeting.edu</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
