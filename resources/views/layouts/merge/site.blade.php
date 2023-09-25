@include('layouts._includes.site.Header')

<body>
    <!-- ========== Header Nav Bar Start ========== -->
    @include('layouts._includes.site.Menu')
    <!-- Header Nav Bar End -->

    <!--**********************************
            Content body start
        ***********************************-->

    @yield('conteudo')

    <!--**********************************
        Content body end
    ***********************************-->
    <!--**********************************
            Footer start
        ***********************************-->
    @include('layouts._includes.site.Footer')
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

</body>
<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (let i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>

<!-- Incluindo jQuery -->
<script src="{{ asset('site/assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{asset('site/assets/js/bootstrap.bundle.min.js')}}" ></script>

{{-- <script src="{{asset('site/assets/js/popper.min.js')}}" ></script>
<script src="{{asset('site/assets/js/bootstrap.min.js')}}" ></script> --}}
@yield('script')

</html>
