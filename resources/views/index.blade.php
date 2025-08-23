<!DOCTYPE html>
<html lang="en">

  <head>

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
                          Lombok Vibes
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li><a href="meetings.html">Meetings</a></li>
                          <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Upcoming Meetings</a></li>
                                  <li><a href="meeting-details.html">Meeting Details</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
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

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
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
              <p>Lombok Vibes is a reliable car rental service provider in Lombok, offering a wide range of vehicle options from city cars to family cars. The company also provides various tour packages to explore the beauty of Lombok.</p>
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
          
          <a href="{{ route('detail_wisata') }}" class="item" style="background-image: url('assets/images/pantai-1.png');">
            <div class="down-content">
              <h4>Paket Wisata A</h4>
              <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
            </div>
          </a>
          
          <a href="{{ route('detail_wisata') }}" class="item" style="background-image: url('assets/images/airterjun-1.png');">
            <div class="down-content">
              <h4>Paket Wisata B</h4>
              <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
            </div>
          </a>
          
          <a href="{{ route('detail_wisata') }}" class="item" style="background-image: url('assets/images/gunung-1.png');">
            <div class="down-content">
              <h4>Paket Wisata C</h4>
              <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
            </div>
          </a>
          
          <a href="{{ route('detail_wisata') }}" class="item" style="background-image: url('assets/images/pantai-2.jpg');">
            <div class="down-content">
              <h4>Paket Wisata D</h4>
              <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
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
                      <input type="date" id="tanggal_rental" name="tanggal_rental" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                      <label for="durasi" class="form-label">Durasi (hari)</label>
                      <input type="number" id="durasi" name="durasi" class="form-control" min="1" required>
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
                      <input type="date" id="tanggal_wisata" name="tanggal_wisata" class="form-control" required>
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
                      <button class="btn btn-detail" type="button" id="lihatDetailBtn" class="btn btn-info w-100 mt-2" data-bs-toggle="modal" data-bs-target="#detailModal" disabled>
                        <i class="bi bi-info-circle"></i> Detail Paket
                      </button>
                    </div>

                    <!-- Modal Detail Paket -->
                    <!-- Modal Detail -->
                    <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="false" data-bs-scroll="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content shadow-lg border-0">
                          <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title fw-bold" id="detailModalLabel">Detail Paket</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
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
                  <button class="nav-link active px-4 py-2 rounded-pill" data-bs-target="rental" type="button">
                    Rental Mobil
                  </button>
                </li>
                <li class="nav-item ms-2" role="presentation">
                  <button class="nav-link px-4 py-2 rounded-pill" data-bs-target="wisata" type="button">
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
                    <li>
                      <span class="step-icon"><i class="bi bi-car-front-fill"></i></span>
                      Pilih tipe mobil yang tersedia
                    </li>
                    <li>
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


<section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Welcome to Car Rental Lombok</h2>
            <p>
              Providing service with a swift response, seamless experience, and a diverse fleet of vehicles available for self-drive or with a professional driver. Your satisfaction is our top priority.
            </p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="container-xxl">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-clock-o text-primary mb-4"></i>
                                <h5 class="mb-3">On 24 Hours</h5>
                                <p>24 Hours Service</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-history text-primary mb-4"></i>
                                <h5 class="mb-3">On Time</h5>
                                <p>Pickup and Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-users text-primary mb-4"></i>
                                <h5 class="mb-3">Friendly Staff</h5>
                                <p>Proessional Satff and Driver</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-car text-primary mb-4"></i>
                                <h5 class="mb-3">Well-Kept Car</h5>
                                <p>Guaranteed clean and tidy</p>
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

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-9 align-self-center">
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
        </div> -->
        <!-- <div class="col-lg-3">
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
        </div> -->
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
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
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

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });


        document.querySelectorAll('#bookingTabs .nav-link').forEach(btn => {
  btn.addEventListener('click', function () {
    const target = this.getAttribute('data-bs-target');

    // switch form
    document.querySelectorAll('#formTabsContent .tab-pane')
      .forEach(p => p.classList.remove('show','active'));
    const formTarget = document.querySelector(`#form-${target}`);
    formTarget.classList.add('active');
    setTimeout(() => formTarget.classList.add('show'), 10);

    // switch info
    document.querySelectorAll('#infoTabsContent .tab-pane')
      .forEach(p => p.classList.remove('show','active'));
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

paketSelect.addEventListener('change', function () {
  lihatDetailBtn.disabled = !paketSelect.value;
});

lihatDetailBtn.addEventListener('click', function () {
  const selected = paketSelect.value;
  const detailDiv = document.getElementById(selected + '_detail');
  if (detailDiv) {
    detailModalLabel.textContent = detailDiv.querySelector('h5').textContent;
    detailModalBody.innerHTML = detailDiv.innerHTML;
  }
});

    </script>
</body>

</body>
</html>