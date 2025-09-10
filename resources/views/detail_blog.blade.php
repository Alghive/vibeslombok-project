@extends('layouts.master')
@section('title', 'Detail Blog')
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

<section class="heading-page header-text" id="top" style="background-image: url('assets/images/pantai-1.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>BLOG</h6>
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

                                <!-- Isi Detail Blog -->
                                <div class="blog-detail">

                                    <!-- Judul -->
                                    <h2 class="blog-title mb-3 text-center">Experience Lombok Your Way with Vibes
                                        Lombok Car Rental</h2>

                                    <!-- Meta Info -->
                                    <div class="blog-meta text-center mb-4 text-muted">
                                        <span><i class="fa fa-calendar me-2"></i> June 10, 2025</span>
                                        <span class="ms-3"><i class="fa fa-user me-2"></i> Admin</span>
                                    </div>

                                    <!-- Thumbnail pakai background-image -->
                                    <div class="blog-thumbnail mb-4"
                                        style="background-image: url('assets/images/pantai-3.jpg');"></div>

                                    <!-- Konten -->
                                    <div class="blog-content">
                                        <p>
                                            Planning your dream getaway to the stunning island of Lombok? To truly
                                            experience everything this magical paradise has to offer, from its pristine
                                            beaches to its majestic volcanoes, having reliable transportation is key.
                                        </p>

                                        <h4>Why Choose Vibes Lombok Car Rental?</h4>
                                        <p>
                                            At Vibes Lombok Car Rental, we pride ourselves on offering an exceptional
                                            and hassle-free experience. We understand that convenience, safety, and
                                            reliability are paramount for your vacation.
                                        </p>

                                        <h4>Professionalism at Its Best</h4>
                                        <p>
                                            As a professional car rental company in Lombok, we are committed to
                                            providing you with the highest standard of service. From the moment you
                                            inquire until you return your vehicle, expect clear communication,
                                            transparent prices, and smooth transactions.
                                        </p>

                                        <h4>Comprehensive Insurance for Your Safety</h4>
                                        <p>
                                            Your safety is our top priority. Unlike other rentals, all our rental
                                            vehicles include comprehensive insurance. This gives you peace of mind
                                            throughout your journey, allowing you to focus on exploring without worry.
                                        </p>

                                        <h4>Driver or Self-Drive: Your Choice</h4>
                                        <p>
                                            Whether you prefer the convenience of having a local expert navigating
                                            Lombok or the freedom of exploring at your own pace, Vibes Lombok Car Rental
                                            offers both options.
                                        </p>

                                        <ul>
                                            <li><strong>Car Rental with Driver:</strong> Let our experienced drivers
                                                guide you safely through Lombok’s top destinations.</li>
                                            <li><strong>Self-Drive:</strong> Enjoy the adventure of discovering hidden
                                                gems at your own pace with our well-maintained cars.</li>
                                        </ul>
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
@endsection
