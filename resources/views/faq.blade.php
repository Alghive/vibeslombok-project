@extends('layouts.master')

@section('title', 'FAQ')
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
          <h2>FAQ</h2>
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

                <!-- FAQ Section -->
                
                  <h2 class="faq-title text-center mb-4">❓ Frequently Asked Questions</h2>
                  
                  <div class="faq-item">
                    <button class="faq-question">Bagaimana cara melakukan booking? <span>+</span></button>
                    <div class="faq-answer">
                      <p>Anda bisa melakukan booking dengan klik tombol <strong>Booking Now</strong> di bawah, lalu isi form yang tersedia sesuai kebutuhan.</p>
                    </div>
                  </div>

                  <div class="faq-item">
                    <button class="faq-question">Apakah bisa melakukan pembatalan booking? <span>+</span></button>
                    <div class="faq-answer">
                      <p>Ya, pembatalan dapat dilakukan maksimal <strong>H-1 sebelum acara</strong> dengan menghubungi admin melalui kontak yang tersedia.</p>
                    </div>
                  </div>

                  <div class="faq-item">
                    <button class="faq-question">Metode pembayaran apa saja yang tersedia? <span>+</span></button>
                    <div class="faq-answer">
                      <p>Kami menerima pembayaran melalui <strong>Transfer Bank, E-Wallet (OVO, GoPay, Dana), dan Virtual Account</strong>.</p>
                    </div>
                  </div>

                  <div class="faq-item">
                    <button class="faq-question">Apakah ada layanan customer support? <span>+</span></button>
                    <div class="faq-answer">
                      <p>Tentu, tim customer support kami siap membantu Anda setiap hari pukul <strong>08.00 - 21.00 WIB</strong>.</p>
                    </div>
                  </div>
                </div>
                <!-- End FAQ -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection