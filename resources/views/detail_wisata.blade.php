<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Template - Meeting Detail Page</title>

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
                          Edu Meeting
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('rent-car') }}">Rent Car</a></li>
                                <li><a href="{{ route('tour-package') }}">Tour Package</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#courses">About Us</a></li> 
                        <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
                        <li class="scroll-to-section"><a href="#contact">Blog</a></li>
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
                          <img src="assets/images/user.jpg" alt="User" class="user-avatar">
                        </a>

                        <!-- Dropdown User Menu -->
                        <div class="user-dropdown" id="userDropdown">
                          <div class="user-info">
                            <img src="assets/images/user.jpg" alt="User" class="user-avatar-lg">
                            <div>
                              <h5>Rizky Haidar</h5>
                              <p>rizkyhaidar04@gmail.com</p>
                            </div>
                          </div>

                          <!-- Tambahan tombol edit profil -->
                          <div class="edit-profile-btn" style="margin-bottom: 0px;">
                            <a href="profile.html">
                              <i class="fa fa-edit"></i> Edit Profile
                            </a>
                          </div>

                          <ul>
                            <li><a href="#"><i class="fa fa-user-cog"></i> History</a></li>
                            <li><a href="#"><i class="fa fa-shield-alt"></i> Security</a></li>
                            <li><a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
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
                <a href="meeting-details.html"><h4>Private Trip Gili Islands Full-Day Island Hopping: Trawangan, Meno & Air</h4></a>
                <p>Keterangan Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, modi?</p>
                
                <!-- deskripsi content start -->
                <p class="description">
                  <strong>Detailed Itinerary</strong><br><br>

                  <img src="assets/images/pantai-1.png" alt="Hotel Pick-up" style="width:400px; margin-bottom:8px; border-radius: 7px;"><br>
                  <strong>08:00 AM - 08:30 AM: Hotel Pick-up in Lombok</strong><br>
                  • Your friendly English-speaking driver will pick you up from your hotel anywhere in Lombok (Senggigi, Kuta, Mataram, etc.) in a comfortable, air-conditioned private car.<br>
                  • Enjoy a scenic drive through Lombok’s landscapes towards the harbor.<br><br>

                  <img src="assets/images/pantai-2.jpg" alt="Hotel Pick-up" style="width:400px; margin-bottom:8px; border-radius: 7px;"><br>
                  <strong>08:30 AM - 09:30 AM: Transfer to Bangsal Harbor</strong><br>
                  • Journey to Bangsal Harbor, the main departure point for the Gili Islands. Your driver will ensure a smooth and comfortable transfer.<br><br>

                  <img src="assets/images/airterjun-1.png" alt="Hotel Pick-up" style="width:400px; margin-bottom:8px; border-radius: 7px;"><br>
                  <strong>09:30 AM - 10:00 AM: Preparation & Boat Departure</strong><br>
                  • Upon arrival at Bangsal Harbor, you’ll be greeted by your professional guide.<br>
                  • Your guide will assist you with tickets and lead you to your private glass-bottom boat, ready for departure.<br>
                  • Get a briefing about the day’s activities and safety measures.<br><br>

                  <img src="assets/images/gunung-1.png" alt="Hotel Pick-up" style="width:400px; margin-bottom:8px; border-radius: 7px;"><br>
                  <strong>10:00 AM - 10:30 AM: Scenic Boat Ride to Gili Meno (First Snorkeling Stop)</strong><br>
                  • Embark on your private glass-bottom boat. Enjoy the clear waters and views of Lombok as you head towards Gili Meno.<br>
                  • <em>Snorkeling Spot 1 (Coral Garden / Turtle Point):</em> Your guide will lead you to a prime snorkeling spot near Gili Meno, often where you can find turtles. Dive into the crystal-clear waters to explore vibrant coral gardens and encounter various tropical fish. Your GoPro will be ready to capture these underwater moments.
                </p>
                <!-- deskripsi content end -->

                <div class="row">
                  <div class="col-lg-4">
                    <div class="hours">
                      <h5>Hours</h5>
                      <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM - 15:00 PM</p>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="location">
                      <h5>Location</h5>
                      <p>Recreio dos Bandeirantes, 
                      <br>Rio de Janeiro - RJ, 22795-008, Brazil</p>
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

  <div class="footer">
    <p>
      Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
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

        //dropdown user menu
        const userMenuToggle = document.getElementById("userMenuToggle");
        const userDropdown = document.getElementById("userDropdown");

  userMenuToggle.addEventListener("click", function (e) {
    e.preventDefault();
    userDropdown.style.display =
      userDropdown.style.display === "block" ? "none" : "block";
  });

  // Klik di luar menu untuk menutup
  document.addEventListener("click", function (e) {
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
