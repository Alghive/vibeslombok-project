<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education - List of Meetings</title>

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
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('rent-car') }}">Rent Car</a></li>
                                <li><a href="{{ route('tour-package') }}">Tour Package</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#about">About Us</a></li> 
                        <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
                        <li class="scroll-to-section"><a href="#contact">Blog</a></li> 

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
                            <a href="{{ route('profile') }}">
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
          <a href="#"><img src="assets/images/hiace.png" class="img-fluid car-img"></a>
          <div class="car-content text-center">
            <h4 class="car-title"><a href="#">Toyota Hiace</a></h4>
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="rent-price"><span>IDR 350K/</span>day</div>
            <ul class="specs list-unstyled mt-3">
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/avanza.png" class="img-fluid car-img"></a>
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
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/ertiga.png" class="img-fluid car-img"></a>
          <div class="car-content text-center">
            <h4 class="car-title"><a href="#">Suzuki Ertiga</a></h4>
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="rent-price"><span>IDR 350K/</span>day</div>
            <ul class="specs list-unstyled mt-3">
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/hiace.png" class="img-fluid car-img"></a>
          <div class="car-content text-center">
            <h4 class="car-title"><a href="#">Toyota Hiace</a></h4>
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="rent-price"><span>IDR 350K/</span>day</div>
            <ul class="specs list-unstyled mt-3">
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/ertiga.png" class="img-fluid car-img"></a>
          <div class="car-content text-center">
            <h4 class="car-title"><a href="#">Suzuki Ertiga</a></h4>
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="rent-price"><span>IDR 350K/</span>day</div>
            <ul class="specs list-unstyled mt-3">
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/avanza.png" class="img-fluid car-img"></a>
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
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/avanza.png" class="img-fluid car-img"></a>
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
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>
      
      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/xpander.png" class="img-fluid car-img"></a>
          <div class="car-content text-center">
            <h4 class="car-title"><a href="#">Mitsubishi Xpander</a></h4>
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="rent-price"><span>IDR 350K/</span>day</div>
            <ul class="specs list-unstyled mt-3">
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/avanza.png" class="img-fluid car-img"></a>
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
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      
      

      

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/ertiga.png" class="img-fluid car-img"></a>
          <div class="car-content text-center">
            <h4 class="car-title"><a href="#">Suzuki Ertiga</a></h4>
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="rent-price"><span>IDR 350K/</span>day</div>
            <ul class="specs list-unstyled mt-3">
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
          </div>
        </div>
      </div>

      <!-- Card Mobil 1 -->
      <div class="col-md-6 col-lg-4 car-item">
        <div class="car-card">
          <a href="#"><img src="assets/images/ertiga.png" class="img-fluid car-img"></a>
          <div class="car-content text-center">
            <h4 class="car-title"><a href="#">Suzuki Ertiga</a></h4>
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="rent-price"><span>IDR 350K/</span>day</div>
            <ul class="specs list-unstyled mt-3">
              <li><span>Doors</span> <span class="spec">4</span></li>
              <li><span>Seats</span> <span class="spec">5</span></li>
              <li><span>Transmission</span> <span class="spec">Automatic</span></li>
              <li><span>Minimum age</span> <span class="spec">18 years</span></li>
            </ul>
            <a href="contact.html" class="btn btn-primary rounded-pill mt-3">Rent Now</a>
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

  <!-- Footer -->
  <div class="footer text-center mt-5">
    <p>
      Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
      <br>
      Design: <a href="https://templatemo.com" target="_parent">TemplateMo</a>
      <br>
      Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
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



        // Pagination
        document.addEventListener("DOMContentLoaded", function () {
  const itemsPerPage = 9; 
  const items = document.querySelectorAll(".car-item");
  const totalPages = Math.ceil(items.length / itemsPerPage);
  const pagination = document.getElementById("pagination");
  let currentPage = 1;

  function showPage(page) {
    items.forEach((item, index) => {
      item.style.display =
        (index >= (page - 1) * itemsPerPage && index < page * itemsPerPage)
          ? "block" : "none";
    });

    // update active class
    document.querySelectorAll("#pagination li.page-item").forEach(li => li.classList.remove("active"));
    document.querySelector(`#pagination li[data-page="${page}"]`)?.classList.add("active");

    // update prev/next disabled
    document.getElementById("prev").parentElement.classList.toggle("disabled", page === 1);
    document.getElementById("next").parentElement.classList.toggle("disabled", page === totalPages);

    currentPage = page;
  }

  // generate tombol
  pagination.innerHTML = `
    <li class="page-item"><a class="page-link" href="#" id="prev">&laquo;</a></li>
  `;

  for (let i = 1; i <= totalPages; i++) {
    pagination.innerHTML += `
      <li class="page-item" data-page="${i}"><a class="page-link" href="#">${i}</a></li>
    `;
  }

  pagination.innerHTML += `
    <li class="page-item"><a class="page-link" href="#" id="next">&raquo;</a></li>
  `;

  // event click
  pagination.querySelectorAll(".page-item[data-page]").forEach(li => {
    li.addEventListener("click", e => {
      e.preventDefault();
      showPage(Number(li.dataset.page));
    });
  });

  document.getElementById("prev").addEventListener("click", e => {
    e.preventDefault();
    if (currentPage > 1) showPage(currentPage - 1);
  });

  document.getElementById("next").addEventListener("click", e => {
    e.preventDefault();
    if (currentPage < totalPages) showPage(currentPage + 1);
  });

  showPage(1);
});


// user menu
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
    </script>
</body>


  </body>

</html>
