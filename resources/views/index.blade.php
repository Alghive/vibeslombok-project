<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add this line at the very top of the file -->
    @php use Illuminate\Support\Facades\Auth; @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Meeting HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-edu-meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    <!-- CDN tetap boleh langsung -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<body>

    <!-- Sub Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="left-content">
                        <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="right-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            Vibes Lombok
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('rent-car') }}">Rent Car</a></li>
                                    <li><a href="{{ route('tour-package') }}">Tour Package</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#courses">About Us</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <!-- Cart Icon -->
                            <li class="nav-item cart-icon">
                            <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#cartModal">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="badge">3</span>
                            </a>
                            </li>

                            <!-- User Icon -->
                            <li class="user-icon"> 
                                <a href="javascript:void(0)" id="userMenuToggle">
                                    @if(Auth::check() && Auth::user()->profile_picture)
                                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="User" class="user-avatar">
                                    @else
                                        <img src="assets/images/user.jpg" alt="User" class="user-avatar">
                                    @endif
                                </a>
                                
                                <!-- Dropdown User Menu -->
                                <div class="user-dropdown" id="userDropdown">
                                    <div class="user-info">
                                        @if(Auth::check() && Auth::user()->profile_picture)
                                            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="User" class="user-avatar-lg">
                                        @else
                                            <img src="assets/images/user.jpg" alt="User" class="user-avatar-lg">
                                        @endif
                                        <div>
                                            <h5>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</h5>
                                            <p>{{ Auth::check() ? Auth::user()->email : 'Not logged in' }}</p>
                                        </div>
                                    </div>
                                
                                    <!-- Tambahan tombol edit profil -->
                                    <div class="edit-profile-btn" style="margin-bottom: 0px;">
                                        <a href="{{ route('profile') }}">
                                            <i class="fa fa-edit"></i> Edit Profile
                                        </a>
                                    </div>

                                    <ul>
                                        <li><a href="#"><i class="fa fa-user-cog"></i> History</a></li>
                                        <li><a href="#"><i class="fa fa-shield-alt"></i> Security</a></li>
                                        <li><a href="{{ route('guest') }}"><i class="fa fa-sign-out-alt"></i> Logout</a>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

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
                                                    <input class="form-check-input" type="radio"
                                                        name="tipe_layanan" id="self_drive" value="self_drive"
                                                        required>
                                                    <label class="form-check-label" for="self_drive">
                                                        Self-drive
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="tipe_layanan" id="with_driver" value="with_driver"
                                                        required>
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
                                            <select id="paket_wisata" name="paket_wisata" class="form-select"
                                                required>
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
                <div
                  class="col-lg-6 wow fadeInUp"
                  data-wow-delay="0.1s"
                  style="min-height: 400px"
                >
                  <!-- <div class="position-relative h-100">
                    <img
                      class="img-fluid position-absolute w-100 h-100"
                      src="assets/images/pantai-2.jpg"
                      alt=""
                      style="object-fit: cover"
                    />
                  </div> -->
                  <div class="position-relative h-100 d-flex justify-content-center align-items-center">
                  <img
                    class="img-fluid"
                    src="assets/images/mobil-3.png"
                    alt="Mobil"
                    style="object-fit: contain; max-height: 100%;"
                  />
                </div>
                </div>
                <div class="col-lg-6 wow fadeInUp text-white" data-wow-delay="0.3s">
                  <h1 class="mb-4">About Us</h1>
                  <p class="mb-4 text-white">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                    diam amet diam et eos. Clita erat ipsum et lorem et sit.
                  </p>
                  <p class="mb-4 text-white">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                    diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                    lorem sit clita duo justo magna dolore erat amet
                  </p>
                  <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6 d-flex align-items-center">
                      <i class="fa-solid fa-clock fa-lg text-white me-3"></i>
                      <span>24 Hours Service</span>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                      <i class="fa-solid fa-truck fa-lg text-white me-3"></i>
                      <span>On Time Pickup & Delivery</span>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                      <i class="fa-solid fa-user-tie fa-lg text-white me-3"></i>
                      <span>Professional Staff & Driver</span>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                      <i class="fa-solid fa-broom fa-lg text-white me-3"></i>
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
            <p>
              Providing service with a swift response, seamless experience, and a diverse fleet of vehicles available for self-drive or with a professional driver. Your satisfaction is our top priority.
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
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
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
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>
          Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
          <br>
          Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
        </p>
    </div>
  </section>

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Bundle dengan Popper (via CDN, tetap boleh dipakai kalau mau) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Additional JS Files -->
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/video.js') }}"></script>
    <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });


        document.querySelectorAll('#bookingTabs .nav-link').forEach(btn => {
            btn.addEventListener('click', function() {
                const target = this.getAttribute('data-bs-target');

                // switch form
                document.querySelectorAll('#formTabsContent .tab-pane')
                    .forEach(p => p.classList.remove('show', 'active'));
                const formTarget = document.querySelector(`#form-${target}`);
                formTarget.classList.add('active');
                setTimeout(() => formTarget.classList.add('show'), 10);

                // switch info
                document.querySelectorAll('#infoTabsContent .tab-pane')
                    .forEach(p => p.classList.remove('show', 'active'));
                const infoTarget = document.querySelector(`#info-${target}`);
                infoTarget.classList.add('active');
                setTimeout(() => infoTarget.classList.add('show'), 10);

                // update nav-link active
                document.querySelectorAll('#bookingTabs .nav-link')
                    .forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            });
        });



        const paketSelect = document.getElementById('paket_wisata');
        const lihatDetailBtn = document.getElementById('lihatDetailBtn');
        const detailModalLabel = document.getElementById('detailModalLabel');
        const detailModalBody = document.getElementById('detailModalBody');

        paketSelect.addEventListener('change', function() {
            lihatDetailBtn.disabled = !paketSelect.value;
        });

        lihatDetailBtn.addEventListener('click', function() {
            const selected = paketSelect.value;
            const detailDiv = document.getElementById(selected + '_detail');
            if (detailDiv) {
                detailModalLabel.textContent = detailDiv.querySelector('h5').textContent;
                detailModalBody.innerHTML = detailDiv.innerHTML;
            }
        });


        //dropdown user
        const userMenuToggle = document.getElementById("userMenuToggle");
        const userDropdown = document.getElementById("userDropdown");

        userMenuToggle.addEventListener("click", function(e) {
            e.preventDefault();
            userDropdown.style.display =
                userDropdown.style.display === "block" ? "none" : "block";
        });

        // Klik di luar menu untuk menutup
        document.addEventListener("click", function(e) {
            if (!userMenuToggle.contains(e.target) && !userDropdown.contains(e.target)) {
                userDropdown.style.display = "none";
            }
        });


        // Fungsi +/-
document.addEventListener("DOMContentLoaded", function () {
  // cari semua cart item
  document.querySelectorAll(".cart-item").forEach(function (item) {
    let minusBtn = item.querySelector(".btn-outline-success .fa-minus")?.parentElement;
    let plusBtn = item.querySelector(".btn-outline-success .fa-plus")?.parentElement;
    let input = item.querySelector("input[type='text']");

    if (minusBtn && plusBtn && input) {
      // event tombol minus
      minusBtn.addEventListener("click", function () {
        let current = parseInt(input.value) || 0;
        if (current > 1) {
          input.value = current - 1;
        }
      });

      // event tombol plus
      plusBtn.addEventListener("click", function () {
        let current = parseInt(input.value) || 0;
        input.value = current + 1;
      });

      // validasi manual input (supaya tidak kosong / nol)
      input.addEventListener("input", function () {
        let val = parseInt(input.value);
        if (isNaN(val) || val < 1) {
          input.value = 1;
        }
      });
    }
  });
});
    </script>
</body>

</body>

</html>
