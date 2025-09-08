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


        document.querySelectorAll('#bookingTabs .nav-link').forEach(btn => {
            btn.addEventListener('click', function() {
                const target = this.getAttribute('data-bs-target');

                // switch form
                document.querySelectorAll('#formTabsContent .tab-pane')
                    .forEach(p => p.classList.remove('show', 'active'));
                const formTarget = document.querySelector(`#form-${target}`);
                formTarget.classList.add('active');
                setTimeout(() => formTarget.classList.add('show'), 10);

                // switch info
                document.querySelectorAll('#infoTabsContent .tab-pane')
                    .forEach(p => p.classList.remove('show', 'active'));
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

        paketSelect.addEventListener('change', function() {
            lihatDetailBtn.disabled = !paketSelect.value;
        });

        lihatDetailBtn.addEventListener('click', function() {
            const selected = paketSelect.value;
            const detailDiv = document.getElementById(selected + '_detail');
            if (detailDiv) {
                detailModalLabel.textContent = detailDiv.querySelector('h5').textContent;
                detailModalBody.innerHTML = detailDiv.innerHTML;
            }
        });


        //dropdown user
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
    </script>
</body>

</html>
