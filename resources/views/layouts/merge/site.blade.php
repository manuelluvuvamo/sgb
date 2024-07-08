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
        Main wrapper end
    ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    @include('layouts._includes.site.Footer')
    <!--**********************************
            Footer end
        ***********************************-->
    @yield('script')
</body>

< </html>
