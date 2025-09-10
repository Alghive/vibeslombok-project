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

    <title>Vibes Lombok - @yield('title')</title>

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

    @yield('body')
    @yield('script')

    <!-- Sub Header -->


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


        // script untuk navigasi sidebar
        document.querySelectorAll('.profile-sidebar ul li a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // hapus active semua menu
                document.querySelectorAll('.profile-sidebar ul li').forEach(li => li.classList.remove(
                    'active'));

                // beri active pada menu yang diklik
                this.parentElement.classList.add('active');

                // sembunyikan semua konten
                document.querySelectorAll('.content-section').forEach(sec => sec.classList.remove(
                'active'));

                // tampilkan konten sesuai target
                const targetId = this.getAttribute('data-target');
                document.getElementById(targetId).classList.add('active');
            });
        });

        // Tab History
        document.addEventListener("DOMContentLoaded", function() {
            // cek query string ?tab=riwayat
            const urlParams = new URLSearchParams(window.location.search);
            const tab = urlParams.get('tab');

            if (tab) {
                // hapus active semua menu dan section
                document.querySelectorAll('.profile-sidebar ul li').forEach(li => li.classList.remove('active'));
                document.querySelectorAll('.content-section').forEach(sec => sec.classList.remove('active'));

                // aktifkan menu sidebar
                const targetLink = document.querySelector(`.profile-sidebar a[data-target="${tab}"]`);
                if (targetLink) {
                    targetLink.parentElement.classList.add('active');
                }

                // aktifkan konten
                const targetSection = document.getElementById(tab);
                if (targetSection) {
                    targetSection.classList.add('active');
                }
            }
        });

        // Pagination
        document.addEventListener("DOMContentLoaded", function() {
            const itemsPerPage = 9;
            const items = document.querySelectorAll(".blog-item");
            const totalPages = Math.ceil(items.length / itemsPerPage);
            const pagination = document.getElementById("pagination");
            let currentPage = 1;

            function showPage(page) {
                items.forEach((item, index) => {
                    item.style.display =
                        (index >= (page - 1) * itemsPerPage && index < page * itemsPerPage) ?
                        "block" : "none";
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
        document.addEventListener("DOMContentLoaded", function() {
            // cari semua cart item
            document.querySelectorAll(".cart-item").forEach(function(item) {
                let minusBtn = item.querySelector(".btn-outline-success .fa-minus")?.parentElement;
                let plusBtn = item.querySelector(".btn-outline-success .fa-plus")?.parentElement;
                let input = item.querySelector("input[type='text']");

                if (minusBtn && plusBtn && input) {
                    // event tombol minus
                    minusBtn.addEventListener("click", function() {
                        let current = parseInt(input.value) || 0;
                        if (current > 1) {
                            input.value = current - 1;
                        }
                    });

                    // event tombol plus
                    plusBtn.addEventListener("click", function() {
                        let current = parseInt(input.value) || 0;
                        input.value = current + 1;
                    });

                    // validasi manual input (supaya tidak kosong / nol)
                    input.addEventListener("input", function() {
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

</html>
