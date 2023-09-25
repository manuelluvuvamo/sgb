@include('layouts._includes.admin.Header')

<body id="">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!-- ========== Header Nav Left Sidebar Start ========== -->
        @include('layouts._includes.admin.Menu')
        <!-- Header Nav Left Sidebar End -->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            @yield('conteudo')
        </div>
        <!--**********************************
        Content body end
    ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        @include('layouts._includes.admin.Footer')
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('xhtml/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('xhtml/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('xhtml/vendor/owl-carousel/owl.carousel.js')}}"></script>
    
	
	<!-- Apex Chart -->
	<script src="{{asset('xhtml/vendor/apexchart/apexchart.js')}}"></script>

    	<!-- sweetalert2 -->
      {{--   <script src="{{asset('xhtml/vendor/jquery/jquery.min.js')}}"></script> --}}
      <script src="{{asset('xhtml/vendor/sweetalert2/sweetalert2.min.js')}}"></script>
      {{-- <script src="{{asset('xhtml/js/plugins-init/sweetalert.init.js')}}"></script>
  
      
   --}}
	
	<!-- Dashboard 1 -->
	<script src="{{asset('xhtml/js/dashboard/dashboard-1.js')}}"></script>
        <!-- CkEditor -->
	<script src="{{asset('xhtml/vendor/ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('xhtml/js/custom.min.js')}}"></script>
	<script src="{{asset('xhtml/js/deznav-init.js')}}"></script>
	<script src="{{asset('xhtml/js/demo.js')}}"></script>
    <script src="{{asset('xhtml/js/styleSwitcher.js')}}"></script>

	
	<!-- Datatable -->
	<script src="{{asset('xhtml/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('xhtml/js/plugins-init/datatables.init.js')}}"></script>

 

    

 <script src="{{asset('xhtml/vendor/select2/js/select2.full.min.js')}}"></script>
 <script src="{{asset('xhtml/js/plugins-init/select2-init.js')}}"></script>



 <script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            placeholder: "Seleccione o ",
          
            
        });

   
    
    });
</script>
	<script>
		
		$(document).on('click', '.edit-staff', function(){
			$('#staff-edit-form').modal('show');
		});
		$(document).on('click', '.add-staff', function(){
			$('#staff-add-form').modal('show');
		});
		(function($) {
		 
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false, 
				lengthChange:false,
             
                
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		   
		})(jQuery);
	</script>
	
	<script>
		function assignedDoctor()
		{
		
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.assigned-doctor').owlCarousel({
				loop:false,
				margin:30,
				nav:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				dots: false,
				navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:2
					},	
					767:{
						items:3
					},			
					991:{
						items:2
					},
					1200:{
						items:3
					},
					1600:{
						items:4
					},
					1920:{
						items:5
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				assignedDoctor();
			}, 1000); 
		});
		
	</script>

<script>
    $(document).ready(function() {

        //start delete
        $('a.destroy').click(function(ev) {
            var href = $(this).attr('href');
            if (!$('#confirm-delete').length) {
                $('body').append(
                    '<div  class="modal fade" id="confirm-delete" style="backgroud-color:white!important;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content bg-light"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Eliminar os dados</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">Tem certeza que pretende elimnar?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button> <a class="btn btn-info" id="dataConfirmOk">Eliminar<a></div></div></div></div>'
                );
            }
            $('#dataConfirmOk').attr('href', href);
            $('#confirm-delete').modal('show');
            /* $('#confirm-delete').modal({
                shown: true
            }); */
            return false;

        });
        //end delete


        //start purge
        $('a.purge').click(function(ev) {
            var href = $(this).attr('href');
            if (!$('#confirm-purge').length) {
                $('body').append(
                    '<div  class="modal fade" id="confirm-purge" style="backgroud-color:white!important;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content bg-light"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Purgar os dados</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">Tem certeza que pretende  permanentemente(purgar)?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button> <a class="btn btn-info" id="dataConfirmOk2">Purgar<a></div></div></div></div>'
                );
            }
            $('#dataConfirmOk2').attr('href', href);
            /* $('#confirm-purge').modal({
                shown: true
            }); */
            $('#confirm-purge').modal('show');
            return false;

        });
        //end purge
    });
</script>





</body>
