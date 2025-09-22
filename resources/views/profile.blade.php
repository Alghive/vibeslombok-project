@extends('layouts.master')
@section('title', 'Profile')
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

    <section class="heading-page header-text" id="top"
        style="background-image: url('assets/images/bg-faq.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if ($user->profile_picture)
                    <img src="{{ asset('storage/' . $user->profile_picture) }}"
                        alt="Foto Profil" class="profile-img"
                        style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                     @else
                    <img src="{{ asset('assets/images/user.jpg') }}"
                        alt="Foto Profil" class="profile-img"
                        style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                    @endif
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
                                                    <li class="active"><a href="#" data-target="profil">Profil</a>
                                                    </li>
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
                                                        <div class="alert alert-success alert-dismissible fade show"
                                                            role="alert">
                                                            {{ session('success') }}
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>
                                                    @endif

                                                    @if (session('error'))
                                                        <div class="alert alert-danger alert-dismissible fade show"
                                                            role="alert">
                                                            {{ session('error') }}
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>
                                                    @endif
                                                    <!-- Foto Profil -->
                                                    <div class="profile-picture text-center mb-4">
                                                        @if ($user->profile_picture)
                                                            <img src="{{ asset('storage/' . $user->profile_picture) }}"
                                                                alt="Foto Profil" class="profile-img"
                                                                style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                                                        @else
                                                            <img src="{{ asset('assets/images/user.jpg') }}"
                                                                alt="Foto Profil" class="profile-img"
                                                                style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                                                        @endif

                                                        <!-- Upload Form -->
                                                        <div class="upload-form mt-3">
                                                            <form method="POST"
                                                                action="{{ route('profile.upload-picture') }}"
                                                                enctype="multipart/form-data"
                                                                style="display: inline-block;">
                                                                @csrf
                                                                <div class="input-group input-group-sm"
                                                                    style="max-width: 300px;">
                                                                    <input type="file" name="profile_picture"
                                                                        class="form-control form-control-sm"
                                                                        accept="image/*" required>
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-sm">Upload</button>
                                                                </div>
                                                                <div class="form-text small text-muted mt-1">Max 2MB,
                                                                    Format: JPEG, PNG, JPG, GIF</div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <form method="POST" action="{{ route('profile.update') }}">
                                                        @csrf
                                                        <!-- Hidden user ID field -->
                                                        <input type="hidden" name="user_id" value="{{ $user->id }}">

                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $user->name }}" placeholder="Masukkan Nama">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" name="email" class="form-control"
                                                                value="{{ $user->email }}" readonly>
                                                        </div>

                                                        <!-- Email Preferences -->
                                                        <div class="form-group mt-4">
                                                            <h5>Preferensi Email</h5>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="email_notifications" id="emailNotifications"
                                                                    value="1"
                                                                    {{ $user->email_notifications ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="emailNotifications">
                                                                    Notifikasi Email (pembaruan akun, konfirmasi pesanan,
                                                                    dll)
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="marketing_emails" id="marketingEmails"
                                                                    value="1"
                                                                    {{ $user->marketing_emails ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="marketingEmails">
                                                                    Email Marketing (promo, penawaran khusus, berita
                                                                    terbaru)
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <button type="submit"
                                                            class="btn btn-primary btn-block mt-4">Simpan</button>
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
                                                                    <input type="text" name="province"
                                                                        class="form-control"
                                                                        value="{{ $user->province ?? '' }}"
                                                                        placeholder="Masukkan provinsi">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Kota/Kabupaten</label>
                                                                    <input type="text" name="city"
                                                                        class="form-control"
                                                                        value="{{ $user->city ?? '' }}"
                                                                        placeholder="Masukkan kota/kabupaten">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Kecamatan</label>
                                                                    <input type="text" name="district"
                                                                        class="form-control"
                                                                        value="{{ $user->district ?? '' }}"
                                                                        placeholder="Masukkan kecamatan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Kode Pos</label>
                                                                    <input type="text" name="postal_code"
                                                                        class="form-control"
                                                                        value="{{ $user->postal_code ?? '' }}"
                                                                        placeholder="Masukkan kode pos">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button type="submit"
                                                            class="btn btn-primary btn-block mt-3">Simpan Alamat</button>
                                                    </form>
                                                </div>

                                                <div id="password" class="content-section">
                                                    <h4 class="mb-4">Ubah Password</h4>
                                                    <form method="POST" action="{{ route('profile.change-password') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Password Lama</label>
                                                            <input type="password" name="current_password"
                                                                class="form-control" placeholder="Masukkan Password Lama"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password Baru</label>
                                                            <input type="password" name="password" class="form-control"
                                                                placeholder="Masukkan Password Baru" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Konfirmasi Password Baru</label>
                                                            <input type="password" name="password_confirmation"
                                                                class="form-control" placeholder="Ulangi Password Baru"
                                                                required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-block">Simpan
                                                            Perubahan</button>
                                                    </form>
                                                </div>


                                                <!-- Riwayat -->
                                                <div id="riwayat" class="content-section">
                                                <h4 class="mb-4">Riwayat Pemesanan</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover align-middle">
                                                    <thead class="thead-light">
                                                        <tr>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Nomor Pesanan</th>
                                                        <th>Produk</th>
                                                        <th>Total Harga</th>
                                                        <th>Status</th>
                                                        <th>Alamat</th>
                                                        <th>Aksi</th>
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
                                                        <td>Jl. Mawar No.12</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary btn-details" data-bs-toggle="modal" data-bs-target="#detailModal1">
                                                            Detail
                                                            </button>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>2</td>
                                                        <td>20-08-2025</td>
                                                        <td>#ORD12346</td>
                                                        <td>Toyota Avanza</td>
                                                        <td>Rp 250.000</td>
                                                        <td><span class="badge badge-warning">Proses</span></td>
                                                        <td>Jl. Melati No.7</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary btn-details" data-bs-toggle="modal" data-bs-target="#detailModal1">
                                                            Detail
                                                            </button>
                                                        </td>
                                                        </tr>
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

                    <!-- Modal Detail Pesanan 1 -->
<!-- Modal Detail Pesanan -->
<div class="modal fade" id="detailModal1" tabindex="-1" aria-labelledby="detailModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      
      <!-- Header -->
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title font-weight-bold" id="detailModalLabel1">
          <i class="fas fa-receipt text-primary mr-2"></i> Detail Pesanan #ORD12345
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Body -->
      <form>
        <div class="modal-body pt-2">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal</label>
              <input type="text" class="form-control form-control-sm" value="25-08-2025" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Status</label>
              <input type="text" class="form-control form-control-sm" value="Selesai" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Produk</label>
              <input type="text" class="form-control form-control-sm" value="Paket wisata" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Total Harga</label>
              <input type="text" class="form-control form-control-sm" value="Rp 150.000" readonly>
            </div>
            <div class="col-12 mb-3">
              <label class="form-label">Alamat</label>
              <textarea class="form-control form-control-sm" rows="3">Jl. Mawar No.12, Ponorogo</textarea>
              <small class="form-text text-muted">Hanya alamat yang dapat diubah.</small>
            </div>
          </div>
        </div>
        
        <!-- Footer -->
        <div class="modal-footer border-0 pt-0">
          <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">
           Batal
          </button>
          <button type="submit" class="btn btn-sm btn-primary">
             Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Detail Pesanan 2 -->
<!-- Modal Detail Pesanan -->
<div class="modal fade" id="detailModal2" tabindex="-1" aria-labelledby="detailModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      
      <!-- Header -->
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title font-weight-bold" id="detailModalLabel1">
          <i class="fas fa-receipt text-primary mr-2"></i> Detail Pesanan #ORD12345
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Body -->
      <form>
        <div class="modal-body pt-2">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal</label>
              <input type="text" class="form-control form-control-sm" value="25-08-2025" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Status</label>
              <input type="text" class="form-control form-control-sm" value="Selesai" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Produk</label>
              <input type="text" class="form-control form-control-sm" value="Paket wisata" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Total Harga</label>
              <input type="text" class="form-control form-control-sm" value="Rp 150.000" readonly>
            </div>
            <div class="col-12 mb-3">
              <label class="form-label">Alamat</label>
              <textarea class="form-control form-control-sm" rows="3">Jl. Mawar No.12, Ponorogo</textarea>
              <small class="form-text text-muted">Hanya alamat yang dapat diubah.</small>
            </div>
          </div>
        </div>
        
        <!-- Footer -->
        <div class="modal-footer border-0 pt-0">
          <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">
            Batal
          </button>
          <button type="submit" class="btn btn-sm btn-primary">
             Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</section>

@endsection
