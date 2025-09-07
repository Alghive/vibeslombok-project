<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Add Auth facade at the top -->
    @php use Illuminate\Support\Facades\Auth; @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Profile</title>

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

   
  <!-- Profile Page -->
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
                      <a href="{{ url('/') }}" class="logo">
                          Vibes Lombok
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="{{ url('/') }}">Home</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Services</a>
                              <ul class="sub-menu">
                                <li><a href="{{ route('rent-car') }}">Rent Car</a></li>
                                <li><a href="{{ route('tour-package') }}">Tour Package</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="{{ url('/#courses') }}">About Us</a></li> 
                          <li class="scroll-to-section"><a href="{{ url('/#contact') }}">Contact</a></li> 
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
                                      <img src="{{ asset('assets/images/user.jpg') }}" alt="User" class="user-avatar">
                                  @endif
                              </a>

                              <!-- Dropdown User Menu -->
                              <div class="user-dropdown" id="userDropdown">
                                  <div class="user-info">
                                      @if(Auth::check() && Auth::user()->profile_picture)
                                          <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="User" class="user-avatar-lg">
                                      @else
                                          <img src="{{ asset('assets/images/user.jpg') }}" alt="User" class="user-avatar-lg">
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
                                      <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
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

  <section class="heading-page header-text" id="top" style="background-image: url('assets/images/pantai-4.jpg'); display:none;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Paket Wisata Pulau Lombok</h6>
          <h2>Lorem ipsum dolor sit amet.</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings" style="padding-top:150px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="meeting-single-item">
              <div class="down-content">
                
                <!-- isi profile page -->
                <div class="row">
                  <!-- Sidebar -->
                  <div class="col-lg-3">
                    <div class="profile-sidebar">
                      <ul>
                        <li class="sidebar-heading">Akun</li>
                        <li class="active"><a href="#" data-target="profil">Profil</a></li>
                        <li><a href="#" data-target="alamat">Alamat</a></li>
                        <li><a href="#" data-target="password">Ubah Password</a></li>


                        <li class="sidebar-heading">Transaksi</li>
                        <li><a href="#" data-target="riwayat">Riwayat Pemesanan</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Konten -->
                  <div class="col-lg-9">
                    <div class="profile-content">
                      <!-- Profil -->
                      <div id="profil" class="content-section active">
                        <h4 class="mb-4">Profil Saya</h4>
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                              <!-- Foto Profil -->
                              <div class="profile-picture text-center mb-4">
                                @if($user->profile_picture)
                                    <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Foto Profil" class="profile-img" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                                @else
                                    <img src="{{ asset('assets/images/user.jpg') }}" alt="Foto Profil" class="profile-img" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                                @endif
                                
                                <!-- Upload Form -->
                                <div class="upload-form mt-3">
                                  <form method="POST" action="{{ route('profile.upload-picture') }}" enctype="multipart/form-data" style="display: inline-block;">
                                    @csrf
                                    <div class="input-group input-group-sm" style="max-width: 300px;">
                                      <input type="file" name="profile_picture" class="form-control form-control-sm" accept="image/*" required>
                                      <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                                    </div>
                                    <div class="form-text small text-muted mt-1">Max 2MB, Format: JPEG, PNG, JPG, GIF</div>
                                  </form>
                                </div>
                              </div>

                              <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                <!-- Hidden user ID field -->
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                                </div>
                                
                                <!-- Email Preferences -->
                                <div class="form-group mt-4">
                                  <h5>Preferensi Email</h5>
                                  <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="email_notifications" id="emailNotifications" value="1" {{ $user->email_notifications ? 'checked' : '' }}>
                                    <label class="form-check-label" for="emailNotifications">
                                      Notifikasi Email (pembaruan akun, konfirmasi pesanan, dll)
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="marketing_emails" id="marketingEmails" value="1" {{ $user->marketing_emails ? 'checked' : '' }}>
                                    <label class="form-check-label" for="marketingEmails">
                                      Email Marketing (promo, penawaran khusus, berita terbaru)
                                    </label>
                                  </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block mt-4">Simpan</button>
                              </form>
                            </div>

                            <!-- Alamat -->
                            <div id="alamat" class="content-section">
                              <h4 class="mb-4">Alamat Saya</h4>
                              
                              @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul class="mb-0">
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif

                              <form method="POST" action="{{ route('profile.update-address') }}">
                                @csrf
                                <div class="form-group">
                                  <label>Alamat Lengkap</label>
                                  <textarea name="address" class="form-control" rows="3" placeholder="Masukkan alamat lengkap">{{ $user->address ?? '' }}</textarea>
                                </div>
                                
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Provinsi</label>
                                      <input type="text" name="province" class="form-control" value="{{ $user->province ?? '' }}" placeholder="Masukkan provinsi">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Kota/Kabupaten</label>
                                      <input type="text" name="city" class="form-control" value="{{ $user->city ?? '' }}" placeholder="Masukkan kota/kabupaten">
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Kecamatan</label>
                                      <input type="text" name="district" class="form-control" value="{{ $user->district ?? '' }}" placeholder="Masukkan kecamatan">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Kode Pos</label>
                                      <input type="text" name="postal_code" class="form-control" value="{{ $user->postal_code ?? '' }}" placeholder="Masukkan kode pos">
                                    </div>
                                  </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block mt-3">Simpan Alamat</button>
                              </form>
                            </div>

                            <div id="password" class="content-section">
                              <h4 class="mb-4">Ubah Password</h4>
                              <form method="POST" action="{{ route('profile.change-password') }}">
                                @csrf
                                <div class="form-group">
                                  <label>Password Lama</label>
                                  <input type="password" name="current_password" class="form-control" placeholder="Masukkan Password Lama" required>
                                </div>
                                <div class="form-group">
                                  <label>Password Baru</label>
                                  <input type="password" name="password" class="form-control" placeholder="Masukkan Password Baru" required>
                                </div>
                                <div class="form-group">
                                  <label>Konfirmasi Password Baru</label>
                                  <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi Password Baru" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                              </form>
                            </div>


                            <div id="riwayat" class="content-section">
                              <h4 class="mb-4">Riwayat Pemesanan</h4>
                              <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                  <thead class="thead-light">
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal</th>
                                      <th>Nomor Pesanan</th>
                                      <th>Produk</th>
                                      <th>Total Harga</th>
                                      <th>Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>25-08-2025</td>
                                      <td>#ORD12345</td>
                                      <td>Paket wisata</td>
                                      <td>Rp 150.000</td>
                                      <td><span class="badge badge-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>20-08-2025</td>
                                      <td>#ORD12346</td>
                                      <td>Toyota Avanza</td>
                                      <td>Rp 250.000</td>
                                      <td><span class="badge badge-warning">Proses</span></td>
                                    </tr>
                                    <!-- Tambahkan baris berikutnya sesuai data -->
                                  </tbody>
                                </table>
                              </div>
                            </div>
                       </div>
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


        // script untuk navigasi sidebar
        document.querySelectorAll('.profile-sidebar ul li a').forEach(link => {
          link.addEventListener('click', function(e) {
            e.preventDefault();

            // hapus active semua menu
            document.querySelectorAll('.profile-sidebar ul li').forEach(li => li.classList.remove('active'));

            // beri active pada menu yang diklik
            this.parentElement.classList.add('active');

            // sembunyikan semua konten
            document.querySelectorAll('.content-section').forEach(sec => sec.classList.remove('active'));

            // tampilkan konten sesuai target
            const targetId = this.getAttribute('data-target');
            document.getElementById(targetId).classList.add('active');
          });
        });

        // User dropdown menu toggle
        document.getElementById('userMenuToggle').addEventListener('click', function(e) {
          e.preventDefault();
          const dropdown = document.getElementById('userDropdown');
          dropdown.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
          const dropdown = document.getElementById('userDropdown');
          const toggle = document.getElementById('userMenuToggle');
          if (!dropdown.contains(e.target) && !toggle.contains(e.target)) {
            dropdown.classList.remove('active');
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
