 <!-- ======= Footer ======= -->
 <footer id="footer">
     <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-4 col-md-6 footer-info">
                     <h3>SGB - CEFOPESCAS</h3>
                     <p>
                         Rua dos Ramiros: 144 <br>
                         <strong>Phone:</strong> +244 999 000 000<br>
                         <strong>Email:</strong> info@sgb.com<br>
                     </p>
                     <div class="social-links mt-3">
                         <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                         <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                         <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                         <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 footer-links" style="text-align: center!important;">
                     <h4>Links Úteis</h4>
                     <ul style="display: inline-block; text-align: center!important;">
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>

                     </ul>
                 </div>
                 <div class="col-lg-4 col-md-6 footer-links" style="text-align: right!important;">
                     <h4>Institucional</h4>
                     <ul style="display: inline-block; text-align: right!important;">
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Ministério da Educação</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Ministério das Pescas e Recursos
                                 Marinhos</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="https://www.institutocefopescas.com/"
                                 target="_blank">CEFOPESCAS</a></li>

                     </ul>
                 </div>





             </div>
         </div>
     </div>

     <div class="container">
         <div class="copyright">
             &copy; Copyright <strong><span>SGB</span></strong>. Todos os Direitos Reservados
         </div>
         <div class="credits">

             {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
         </div>
     </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="{{ asset('site/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
 <script src="{{ asset('site/assets/vendor/aos/aos.js') }}"></script>
 <script src="{{ asset('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('site/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ asset('site/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('site/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('site/assets/vendor/php-email-form/validate.js') }}"></script>
 <script src="{{ asset('site/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
 <!-- Template Main JS File -->
 <script src="{{ asset('site/assets/js/main.js') }}"></script>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const searchIcon = document.getElementById('search-icon');
         const searchForm = document.getElementById('search-form');

         searchIcon.addEventListener('click', function(event) {
             event.preventDefault();
             searchForm.classList.toggle('d-none');
         });

         // Close the search form if clicked outside of it
         document.addEventListener('click', function(event) {
             if (!searchForm.contains(event.target) && !searchIcon.contains(event.target)) {
                 searchForm.classList.add('d-none');
             }
         });
     });
 </script>
