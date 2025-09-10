@extends('layouts.master')
@section('title', 'Tour Package')
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
                    <h6>Tour Package</h6>
                    <h2>Explore Your Destination</h2>
                </div>
            </div>
        </div>

        <!-- Search & Filter Card (pindahkan ke sini) -->
        <div class="search-filter-card">
            <div class="container">
                <div class="card shadow-lg filter-card">
                    <div class="row align-items-center g-3">
                        <div class="col-md-4">
                            <label class="form-label">Search Package</label>
                            <input type="text" class="form-control" placeholder="Search by car name...">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Destination</label>
                            <select class="form-select">
                                <option>All</option>
                                <option>Beach</option>
                                <option>Mount</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Group size</label>
                            <select class="form-select">
                                <option>All</option>
                                <option>Private (2-4 pax)</option>
                                <option>Small Group (5-10 pax)</option>
                                <option>Large Group (>10 pax)</option>
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
                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/pantai-4.jpg');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>

                            <!-- <ul class="tour-specs list-unstyled mt-3">
                  <li><i class="bi bi-hotel text-primary"></i> Hotel Bintang 3</li>
                  <li><i class="bi bi-bus-front text-success"></i> Transportasi AC</li>
                  <li><i class="bi bi-egg-fried text-warning"></i> 6x Makan</li>
                  <li><i class="bi bi-people text-danger"></i> Tour Guide</li>
                </ul> -->

                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/pantai-1.png');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/pantai-2.jpg');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/pantai-4.jpg');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/airterjun-1.png');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/gunung-1.png');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/pantai-4.jpg');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/pantai-4.jpg');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/pantai-4.jpg');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->

                <!-- Card Paket Wisata -->
                <div class="col-md-6 col-lg-4 tour-item">
                    <div class="tour-card">
                        <div class="tour-img" style="background-image: url('assets/images/pantai-4.jpg');"></div>
                        <div class="tour-content text-center">
                            <h4 class="tour-title"><a href="#">Bali 3D2N Tour</a></h4>
                            <div class="rating mb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="tour-price"><span>IDR 2.500K</span> / paket</div>
                            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Paket Wisata -->






                <!-- Duplicate card lainnya... -->
            </div>

            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-center mt-5" id="pagination"></ul>
            </nav>
        </div>
    </section>

@endsection
