@extends('layouts.master')
@section('title', 'Rent Car')
@section('content')

    <section class="heading-page header-text" id="top" style="background-image: url('assets/images/bg-car4.jpg'); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Rental Car</h6>
                    <h2>Explore Your Car</h2>
                </div>
            </div>
        </div>

        <!-- Search & Filter Card (pindahkan ke sini) -->
        <div class="search-filter-card">
            <div class="container">
                <div class="card shadow-lg filter-card">
                    <div class="row align-items-center g-3">
                        <div class="col-md-4">
                            <label class="form-label">Search Car</label>
                            <input type="text" class="form-control" placeholder="Search by car name...">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Transmission</label>
                            <select class="form-select">
                                <option>All</option>
                                <option>Automatic</option>
                                <option>Manual</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Seats</label>
                            <select class="form-select">
                                <option>All</option>
                                <option>4 Seats</option>
                                <option>5 Seats</option>
                                <option>7 Seats</option>
                            </select>
                        </div>
                        <div class="col-md-2 text-center">
                            <button class="btn btn-primary w-100 mt-4">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="meetings-page" id="meetings" style="padding-top:150px;">
        <div class="container">
            <div class="row g-4" id="car-list">
                <!-- Semua card mobil (tetap ditulis semua di sini, tapi nanti diatur tampilannya via JS) -->
                <!-- Card Mobil 1 -->
                <div class="col-md-6 col-lg-4 car-item">
                    <div class="car-card">
                        <!-- Badge status -->
                        <div class="availability-badge available">Available</div>
                        <!-- Carousel utama -->
                        <div id="carCarousel" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/avanza-1.png" class="d-block w-100" alt="Mobil 1">
                                    <!-- <div class="car-img" style="background-image: url('assets/images/avanza-1.png');"></div> -->
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/avanza-2.png" class="d-block w-100" alt="Mobil 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/avanza-3.png" class="d-block w-100" alt="Mobil 3">
                                </div>
                            </div>
                            <!-- tombol prev/next -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <!-- Thumbnail control -->
                        <div class="carousel-thumbnails d-flex justify-content-center mt-2">
                            <img src="assets/images/avanza-1.png" class="thumb active" data-bs-target="#carCarousel"
                                data-bs-slide-to="0">
                            <img src="assets/images/avanza-2.png" class="thumb" data-bs-target="#carCarousel"
                                data-bs-slide-to="1">
                            <img src="assets/images/avanza-3.png" class="thumb" data-bs-target="#carCarousel"
                                data-bs-slide-to="2">
                        </div>
                        <div class="car-content text-center">
                            <h4 class="car-title"><a href="#">Toyota Avanza</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <div class="rent-price"><span>IDR 350K/</span>day</div>
                            <ul class="specs list-unstyled mt-3">
                                <li><span>Year</span> <span class="spec">2024</span></li>
                                <li><span>Seats</span> <span class="spec">4</span></li>
                                <li><span>Transmission</span> <span class="spec">Automatic</span></li>
                                <li><span>Fuel Type</span> <span class="spec">Bensin</span></li>
                            </ul>
                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <a href="contact.html" class="btn btn-primary rounded-pill px-4">
                                    Rent Now
                                </a>
                                <button class="btn btn-cart rounded-circle" data-bs-toggle="modal"
                                    data-bs-target="#cartModal">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card Mobil 1 -->
                <div class="col-md-6 col-lg-4 car-item">
                    <div class="car-card">
                        <!-- Badge status -->
                        <div class="availability-badge not-available">Not Available</div>
                        <!-- Carousel utama -->
                        <div id="carCarousel" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/rush-1.png" class="d-block w-100" alt="Mobil 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/rush-2.png" class="d-block w-100" alt="Mobil 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/rush-33.png" class="d-block w-100" alt="Mobil 3">
                                </div>
                            </div>
                            <!-- tombol prev/next -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <!-- Thumbnail control -->
                        <div class="carousel-thumbnails d-flex justify-content-center mt-2">
                            <img src="assets/images/rush-1.png" class="thumb active" data-bs-target="#carCarousel"
                                data-bs-slide-to="0">
                            <img src="assets/images/rush-2.png" class="thumb" data-bs-target="#carCarousel"
                                data-bs-slide-to="1">
                            <img src="assets/images/rush-33.png" class="thumb" data-bs-target="#carCarousel"
                                data-bs-slide-to="2">
                        </div>
                        <div class="car-content text-center">
                            <h4 class="car-title"><a href="#">Toyota Rush</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <div class="rent-price"><span>IDR 350K/</span>day</div>
                            <ul class="specs list-unstyled mt-3">
                                <li><span>Year</span> <span class="spec">2018</span></li>
                                <li><span>Seats</span> <span class="spec">4</span></li>
                                <li><span>Transmission</span> <span class="spec">Automatic</span></li>
                                <li><span>Fuel Type</span> <span class="spec">Bensin</span></li>
                            </ul>
                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <a href="contact.html" class="btn btn-primary rounded-pill px-4">
                                    Rent Now
                                </a>
                                <button class="btn btn-cart rounded-circle" data-bs-toggle="modal"
                                    data-bs-target="#cartModal">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card Mobil 1 -->
                <div class="col-md-6 col-lg-4 car-item">
                    <div class="car-card">
                        <!-- Badge status -->
                        <div class="availability-badge available">Available</div>
                        <!-- Carousel utama -->
                        <div id="carCarousel" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/avanza-1.png" class="d-block w-100" alt="Mobil 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/avanza-2.png" class="d-block w-100" alt="Mobil 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/avanza-3.png" class="d-block w-100" alt="Mobil 3">
                                </div>
                            </div>
                            <!-- tombol prev/next -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <!-- Thumbnail control -->
                        <div class="carousel-thumbnails d-flex justify-content-center mt-2">
                            <img src="assets/images/avanza-1.png" class="thumb active" data-bs-target="#carCarousel"
                                data-bs-slide-to="0">
                            <img src="assets/images/avanza-2.png" class="thumb" data-bs-target="#carCarousel"
                                data-bs-slide-to="1">
                            <img src="assets/images/avanza-3.png" class="thumb" data-bs-target="#carCarousel"
                                data-bs-slide-to="2">
                        </div>
                        <div class="car-content text-center">
                            <h4 class="car-title"><a href="#">Toyota Avanza</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <div class="rent-price"><span>IDR 350K/</span>day</div>
                            <ul class="specs list-unstyled mt-3">
                                <li><span>Year</span> <span class="spec">2024</span></li>
                                <li><span>Seats</span> <span class="spec">4</span></li>
                                <li><span>Transmission</span> <span class="spec">Automatic</span></li>
                                <li><span>Fuel Type</span> <span class="spec">Bensin</span></li>
                            </ul>
                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <a href="contact.html" class="btn btn-primary rounded-pill px-4">
                                    Rent Now
                                </a>
                                <button class="btn btn-cart rounded-circle" data-bs-toggle="modal"
                                    data-bs-target="#cartModal">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Cart -->
                <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel"
                    aria-hidden="true">
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
                                            <span class="fw-bold text-primary">IDR 350K</span><small
                                                class="ms-1">/day</small>
                                        </div>
                                    </div>
                                    <!-- Counter -->
                                    <div class="d-flex flex-column align-items-center ms-3">
                                        <small class="text-muted mb-1">Day</small>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-sm btn-outline-success rounded-pill">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <input type="text" value="1"
                                                class="form-control form-control-sm text-center mx-2" style="width:50px;">
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
                                            <span class="fw-bold text-primary">IDR 300K</span><small
                                                class="ms-1">/day</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center ms-3">
                                        <small class="text-muted mb-1">Day</small>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-sm btn-outline-success rounded-pill">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <input type="text" value="1"
                                                class="form-control form-control-sm text-center mx-2" style="width:50px;">
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
                                            <span class="fw-bold text-primary">IDR 300K</span><small
                                                class="ms-1">/day</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center ms-3">
                                        <small class="text-muted mb-1">Day</small>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-sm btn-outline-success rounded-pill">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <input type="text" value="1"
                                                class="form-control form-control-sm text-center mx-2" style="width:50px;">
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







                <!-- Duplicate card lainnya... -->
            </div>

            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-center mt-5" id="pagination"></ul>
            </nav>
        </div>
    </section>
@endsection
