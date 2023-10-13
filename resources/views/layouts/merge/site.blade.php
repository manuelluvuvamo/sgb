@include('layouts._includes.site.Header')

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
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


    </main>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    @include('layouts._includes.site.Footer')
    <!--**********************************
            Footer end
        ***********************************-->



    <!--**********************************
        Scripts
    ***********************************-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('sitejs/scripts.js') }}"></script>
    @yield('script')
</body>

< </html>
