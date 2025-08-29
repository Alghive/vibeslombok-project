<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="Template Mo" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />

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

  </head>

  <body>
    <!-- ------------------Main Container----------------- -->
    <div
      class="container d-flex justify-content-center align-items-center min-vh-100 py-5"
    >
      <!-- ------------------Register Container----------------- -->
      <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <!-- ------------------Left Box----------------- -->
        <div
          class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
          style="background: #103cbe"
        >
          <div class="featured-image mb-3">
            <!-- Gambar sama dengan login -->
            <img
              src="assets/images/1.png"
              alt=""
              class="img-fluid"
              style="width: 250px"
            />
          </div>
          <p
            class="text-white fs-2"
            style="
              font-family: 'Courier New', Courier, monospace;
              font-weight: 600;
              margin-bottom: 25px;
            "
          >
            Create Account
          </p>
          <small
            class="text-white text-wrap text-center"
            style="width: 17rem; font-family: 'Courier New', Courier, monospace"
            >Join us and explore Lombok Vibes.</small
          >
        </div>

        <!-- ------------------Right Box----------------- -->
        <div class="col-md-6 right-box">
          <div class="row align-items-center">
            <div class="header-text mb-4">
              <h3 class="mb-1">Welcome!</h3>
              <p>Create your new account below.</p>
            </div>

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
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="input-group mb-3">
                  <input
                    type="text"
                    name="name"
                    class="form-control form-control-lg bg-light fs-6 @error('name') is-invalid @enderror"
                    placeholder="Full Name"
                    value="{{ old('name') }}"
                    required
                  />
                  @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input
                    type="email"
                    name="email"
                    class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                    placeholder="Email address"
                    value="{{ old('email') }}"
                    required
                  />
                  @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input
                    type="password"
                    name="password"
                    class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror"
                    placeholder="Password"
                    required
                  />
                  @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="input-group mb-3">
                  <input
                    type="password"
                    name="password_confirmation"
                    class="form-control form-control-lg bg-light fs-6"
                    placeholder="Confirm Password"
                    required
                  />
                </div>

                <div class="input-group mb-4 d-flex justify-content-between">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="agreeCheck"
                      required
                    />
                    <label for="agreeCheck" class="form-check-label text-secondary"
                      ><small>I agree to the <a href="{{ route('terms') }}" target="_blank">terms & conditions</a> and <a href="{{ route('privacy') }}" target="_blank">privacy policy</a></small></label
                    >
                  </div>
                </div>

                <div class="input-group mb-3">
                  <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">
                    Register
                  </button>
                </div>
            </form>
            
            <div class="input-group mb-3">
              <button class="btn btn-lg btn-light w-100 fs-6">
                <img
                  src="assets/images/google.png"
                  style="width: 20px"
                  class="me-2"
                /><small>Sign Up with Google</small>
              </button>
            </div>
            <div class="row">
              <small
                >Already have an account? <a href="{{ route('login') }}">Login</a></small
              >
            </div>
          </div>
        </div>
      </div>
    </div>

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
    
    <!-- Registration validation -->
    <script src="{{ asset('assets/js/register-validation.js') }}"></script>
  </body>
</html>
