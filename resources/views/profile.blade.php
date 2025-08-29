<!DOCTYPE html>
<html lang="en">

  <head>

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
                                <li><a href="">Rent Car</a></li>
                                <li><a href="">Tour Package</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#courses">About Us</a></li> 
                        <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
                        <li class="scroll-to-section"><a href="#contact">Blog</a></li> 
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
                              <!-- Foto Profil -->
                              <div class="profile-picture text-center mb-4">
                                <img src="assets/images/user.jpg" alt="Foto Profil" class="profile-img">
                                <div class="upload-btn mt-2">
                                  <label for="upload-photo" class="btn btn-outline-secondary btn-sm">Ubah Foto</label>
                                  <input type="file" id="upload-photo" accept="image/*" hidden>
                                </div>
                              </div>

                              <form>
                                <div class="form-group">
                                  <label>Username</label>
                                  <input type="text" class="form-control" value="rizkyhz04" readonly>
                                </div>
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" class="form-control" value="rizky@gmail.com" readonly>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Telepon</label>
                                  <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                  <label>Jenis Kelamin</label>
                                  <div class="gender-options">
                                    <label><input type="radio" name="gender"> Laki-laki</label>
                                    <label><input type="radio" name="gender"> Perempuan</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Tanggal Lahir</label>
                                  <input type="text" class="form-control" value="17-08-2000" readonly>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                              </form>
                            </div>

                            <!-- Alamat -->
                            <div id="alamat" class="content-section">
                              <h4>Alamat</h4>
                              <p>Form pengaturan alamat disini...</p>
                            </div>

                            <div id="password" class="content-section">
                              <h4 class="mb-4">Ubah Password</h4>
                              <form>
                                <div class="form-group">
                                  <label>Password Lama</label>
                                  <input type="password" class="form-control" placeholder="Masukkan Password Lama" required>
                                </div>
                                <div class="form-group">
                                  <label>Password Baru</label>
                                  <input type="password" class="form-control" placeholder="Masukkan Password Baru" required>
                                </div>
                                <div class="form-group">
                                  <label>Konfirmasi Password Baru</label>
                                  <input type="password" class="form-control" placeholder="Ulangi Password Baru" required>
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
    </script>
</body>


  </body>

</html>
