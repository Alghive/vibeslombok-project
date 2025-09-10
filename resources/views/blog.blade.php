@extends('layouts.master')

@section('title', 'Blog')

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

    <section class="heading-page header-text" id="top" style="background-image: url('assets/images/tour-2.jpg'); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Explore Your Destination</h2>
                    <h6>BLOG</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings" style="padding-top:150px;">
        <div class="container">
            <div class="row g-4" id="car-list">
                <!-- Item Blog 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <!-- Link overlay (buat card bisa diklik) -->
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/airterjun-1.png');">
                            <span class="blog-tag">Travel</span>
                        </div>

                        <!-- Konten -->
                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">10 Destinasi Wisata Terbaik di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Temukan destinasi terbaik di Lombok yang wajib kamu kunjungi mulai dari pantai hingga
                                wisata budaya.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 5 Sep 2025</small>
                        </div>
                    </div>
                </div>

                <!-- Item Blog 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/gunung-1.png');">
                            <span class="blog-tag">Tips</span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">Tips Liburan Hemat di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Cari tahu cara berlibur hemat tapi tetap menyenangkan di Lombok dengan panduan dari
                                kami.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 2 Sep 2025</small>
                        </div>
                    </div>
                </div>

                <!-- Item Blog 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/pantai-3.jpg');">
                            <span class="blog-tag">Culture</span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">Mengenal Budaya Sasak di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Kenali budaya asli Lombok, suku Sasak dengan adat, seni, dan tradisi unik yang penuh
                                makna.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 28 Agu 2025</small>
                        </div>
                    </div>
                </div>
                <!-- Item Blog 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <!-- Link overlay (buat card bisa diklik) -->
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/airterjun-1.png');">
                            <span class="blog-tag">Travel</span>
                        </div>

                        <!-- Konten -->
                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">10 Destinasi Wisata Terbaik di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Temukan destinasi terbaik di Lombok yang wajib kamu kunjungi mulai dari pantai hingga
                                wisata budaya.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 5 Sep 2025</small>
                        </div>
                    </div>
                </div>

                <!-- Item Blog 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/gunung-1.png');">
                            <span class="blog-tag">Tips</span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">Tips Liburan Hemat di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Cari tahu cara berlibur hemat tapi tetap menyenangkan di Lombok dengan panduan dari
                                kami.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 2 Sep 2025</small>
                        </div>
                    </div>
                </div>

                <!-- Item Blog 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/pantai-3.jpg');">
                            <span class="blog-tag">Culture</span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">Mengenal Budaya Sasak di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Kenali budaya asli Lombok, suku Sasak dengan adat, seni, dan tradisi unik yang penuh
                                makna.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 28 Agu 2025</small>
                        </div>
                    </div>
                </div>
                <!-- Item Blog 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <!-- Link overlay (buat card bisa diklik) -->
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/airterjun-1.png');">
                            <span class="blog-tag">Travel</span>
                        </div>

                        <!-- Konten -->
                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">10 Destinasi Wisata Terbaik di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Temukan destinasi terbaik di Lombok yang wajib kamu kunjungi mulai dari pantai hingga
                                wisata budaya.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 5 Sep 2025</small>
                        </div>
                    </div>
                </div>

                <!-- Item Blog 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/gunung-1.png');">
                            <span class="blog-tag">Tips</span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">Tips Liburan Hemat di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Cari tahu cara berlibur hemat tapi tetap menyenangkan di Lombok dengan panduan dari
                                kami.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 2 Sep 2025</small>
                        </div>
                    </div>
                </div>

                <!-- Item Blog 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/pantai-3.jpg');">
                            <span class="blog-tag">Culture</span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">Mengenal Budaya Sasak di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Kenali budaya asli Lombok, suku Sasak dengan adat, seni, dan tradisi unik yang penuh
                                makna.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 28 Agu 2025</small>
                        </div>
                    </div>
                </div>
                <!-- Item Blog 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <!-- Link overlay (buat card bisa diklik) -->
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/airterjun-1.png');">
                            <span class="blog-tag">Travel</span>
                        </div>

                        <!-- Konten -->
                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">10 Destinasi Wisata Terbaik di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Temukan destinasi terbaik di Lombok yang wajib kamu kunjungi mulai dari pantai hingga
                                wisata budaya.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 5 Sep 2025</small>
                        </div>
                    </div>
                </div>

                <!-- Item Blog 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/gunung-1.png');">
                            <span class="blog-tag">Tips</span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">Tips Liburan Hemat di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Cari tahu cara berlibur hemat tapi tetap menyenangkan di Lombok dengan panduan dari
                                kami.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 2 Sep 2025</small>
                        </div>
                    </div>
                </div>

                <!-- Item Blog 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 blog-item">
                    <div class="blog-card shadow-sm rounded-4 overflow-hidden position-relative">
                        <a href="{{ route('detail_blog') }}" class="stretched-link"></a>

                        <div class="blog-img" style="background-image: url('assets/images/pantai-3.jpg');">
                            <span class="blog-tag">Culture</span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold mb-2 text-dark">Mengenal Budaya Sasak di Lombok</h5>
                            <p class="text-muted small mb-3">
                                Kenali budaya asli Lombok, suku Sasak dengan adat, seni, dan tradisi unik yang penuh
                                makna.
                            </p>
                            <small class="text-muted"><i class="fa fa-calendar me-1"></i> 28 Agu 2025</small>
                        </div>
                    </div>
                </div>
                <!-- Duplicate card lainnya... -->
            </div>

            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-center mt-5" id="pagination"></ul>
            </nav>
        </div>
    </section>
@endsection
