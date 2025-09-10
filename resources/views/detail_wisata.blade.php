@extends('layouts.master')
@section('title', 'Detail Wisata')
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

<section class="heading-page header-text" id="top" style="background-image: url('assets/images/pantai-4.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Paket Wisata Pulau Lombok</h6>
                <h2>Lorem ipsum dolor sit amet.</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="down-content">
                                <a href="meeting-details.html">
                                    <h4>Private Trip Gili Islands Full-Day Island Hopping: Trawangan, Meno & Air</h4>
                                </a>
                                <p>Keterangan Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos,
                                    modi?</p>

                                <!-- deskripsi content start -->
                                <p class="description">
                                    <strong>Detailed Itinerary</strong><br><br>

                                    <img src="assets/images/pantai-1.png" alt="Hotel Pick-up"
                                        style="width:400px; margin-bottom:8px; border-radius: 7px;"><br>
                                    <strong>08:00 AM - 08:30 AM: Hotel Pick-up in Lombok</strong><br>
                                    • Your friendly English-speaking driver will pick you up from your hotel anywhere in
                                    Lombok (Senggigi, Kuta, Mataram, etc.) in a comfortable, air-conditioned private
                                    car.<br>
                                    • Enjoy a scenic drive through Lombok’s landscapes towards the harbor.<br><br>

                                    <img src="assets/images/pantai-2.jpg" alt="Hotel Pick-up"
                                        style="width:400px; margin-bottom:8px; border-radius: 7px;"><br>
                                    <strong>08:30 AM - 09:30 AM: Transfer to Bangsal Harbor</strong><br>
                                    • Journey to Bangsal Harbor, the main departure point for the Gili Islands. Your
                                    driver will ensure a smooth and comfortable transfer.<br><br>

                                    <img src="assets/images/airterjun-1.png" alt="Hotel Pick-up"
                                        style="width:400px; margin-bottom:8px; border-radius: 7px;"><br>
                                    <strong>09:30 AM - 10:00 AM: Preparation & Boat Departure</strong><br>
                                    • Upon arrival at Bangsal Harbor, you’ll be greeted by your professional guide.<br>
                                    • Your guide will assist you with tickets and lead you to your private glass-bottom
                                    boat, ready for departure.<br>
                                    • Get a briefing about the day’s activities and safety measures.<br><br>

                                    <img src="assets/images/gunung-1.png" alt="Hotel Pick-up"
                                        style="width:400px; margin-bottom:8px; border-radius: 7px;"><br>
                                    <strong>10:00 AM - 10:30 AM: Scenic Boat Ride to Gili Meno (First Snorkeling
                                        Stop)</strong><br>
                                    • Embark on your private glass-bottom boat. Enjoy the clear waters and views of
                                    Lombok as you head towards Gili Meno.<br>
                                    • <em>Snorkeling Spot 1 (Coral Garden / Turtle Point):</em> Your guide will lead you
                                    to a prime snorkeling spot near Gili Meno, often where you can find turtles. Dive
                                    into the crystal-clear waters to explore vibrant coral gardens and encounter various
                                    tropical fish. Your GoPro will be ready to capture these underwater moments.
                                </p>
                                <!-- deskripsi content end -->

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="hours">
                                            <h5>Hours</h5>
                                            <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM -
                                                15:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="location">
                                            <h5>Location</h5>
                                            <p>Recreio dos Bandeirantes,
                                                <br>Rio de Janeiro - RJ, 22795-008, Brazil
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="book now">
                                            <h5>Book Now</h5>
                                            <p>010-020-0340<br>090-080-0760</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="index.html">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

