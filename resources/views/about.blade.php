@extends('layouts.master')

@section('title', 'About')
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

  <section class="heading-page header-text" id="top" style="background-image: url('assets/images/bg-faq.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>About Us</h2>
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

                <!-- Profil Perusahaan -->
                <div class="about-section">
                  <h2 class="section-title text-dark">About Us</h2>
                  <p class="section-desc">
                    Welcome to Lombok Car Rental by VibesLombok, your trusted partner for exploring the beautiful island of Lombok. We are dedicated to providing you with a seamless and enjoyable car rental experience, ensuring that your journey is as memorable as your destination.
                  </p>
                </div>

                <!-- Visi & Misi -->
                <div class="about-section">
                  <h3 class="section-subtitle text-dark">Visi</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed justo vel orci malesuada ultrices.</p>

                  <h3 class="section-subtitle mt-4 text-dark">Misi</h3>
                  <p>- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed justo vel orci malesuada ultrices.</p>
                  <p>- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed justo vel orci malesuada ultrices.</p>
                  <p>- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed justo vel orci malesuada ultrices.</p>

                </div>

                <!-- Keunggulan -->
                <div class="about-section">
                  <h3 class="section-subtitle text-dark">Keunggulan Kami</h3>
                  <div class="features-grid">
                    <div class="feature-card">24 Hours Service</div>
                    <div class="feature-card">Professional Staff & Driver</div>
                    <div class="feature-card">On Time Pickup & Delivery</div>
                    <div class="feature-card">Guaranteed Clean & Tidy</div>
                  </div>
                </div>

                <!-- Layanan Kami -->
                <div class="about-section">
                  <h3 class="section-subtitle text-dark">Layanan Kami</h3>
                  <div class="service-list">
                    <div class="layanan-card">
                      <h5>Free Delivery to the Airport</h5>
                      <p>We offer complimentary delivery of your rental car directly to Lombok International Airport, making your arrival hassle-free and convenient.</p>
                    </div>

                    <div class="layanan-card">
                      <h5>Cost-Effective Transportation</h5>
                      <p>Save on transportation costs with our affordable rental rates. Enjoy the freedom to travel anywhere on the island without breaking the bank.</p>
                    </div>

                    <div class="layanan-card">
                      <h5>Explore at Your Own Pace</h5>
                      <p>With our rental cars, you have the flexibility to visit every destination at your leisure. No pressure, no rush—just pure enjoyment of your holiday.</p>
                    </div>

                    <div class="layanan-card">
                      <h5>Enhance Your Vacation Quality</h5>
                      <p>We believe that a great vacation is about more than just the destination; it’s about the journey. Our reliable vehicles and excellent service will help you make the most of your time in Lombok.</p>
                    </div>
                  </div>
                </div>

                <!-- Tim -->
                <div class="about-section">
                  <h3 class="section-subtitle text-dark">Tim Kami</h3>
                  <div class="team-grid">
                    <div class="team-card">
                      <div class="team-image">
                        <img src="assets/images/profil1.webp" alt="Team Member">
                      </div>
                      <h5>Muhammad Alghi</h5>
                      <p>Founder & CEO</p>
                    </div>
                    <div class="team-card">
                      <div class="team-image">
                        <img src="assets/images/profil1.webp" alt="Team Member">
                      </div>
                      <h5>Rafi Pratama</h5>
                      <p>Marketing Director</p>
                    </div>
                    <div class="team-card">
                      <div class="team-image">
                        <img src="assets/images/profil1.webp" alt="Team Member">
                      </div>
                      <h5>Rizky haidar Zaky</h5>
                      <p>Operational Manager</p>
                    </div>
                  </div>
                </div>

                <!-- Penghargaan -->
                <div class="about-section">
                  <h3 class="section-subtitle text-dark">Penghargaan Kami</h3>
                  <div class="awards-grid">
                    <div class="award-card">
                      <h5>🏆 Best Car Rental Service 2024</h5>
                      <p>Penghargaan dari Lombok Tourism Board atas layanan unggulan kami.</p>
                    </div>
                    <div class="award-card">
                      <h5>🥇 Customer Choice Award</h5>
                      <p>Dipilih sebagai layanan paling direkomendasikan oleh pelanggan.</p>
                    </div>
                  </div>
                </div>

                <!-- Partner -->
                <div class="about-section">
                  <h3 class="section-subtitle text-dark">Kerjasama & Media Partner</h3>
                  <div class="partner-logos">
                    <img src="assets/images/pertamina.png" alt="Partner 1">
                    <img src="assets/images/bumn.png" alt="Partner 2">
                    <img src="assets/images/mandalika.png" alt="Partner 3">
                  </div>
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