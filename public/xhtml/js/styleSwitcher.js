"use strict"

function addSwitcher()
{
    var dzSwitcher='<div class="sidebar-right"><div class="bg-overlay"></div><a class="sidebar-right-trigger wave-effect wave-effect-x" data-bs-toggle="tooltip" data-bs-placement="right" data-original-title="Change Layout" href="javascript:void(0);"><span><i class="fa fa-cog fa-spin"></i></span></a> <a class="sidebar-close-trigger" href="javascript:void(0);"><span><i class="la-times las"></i></span></a> <div class="sidebar-right-inner"> <h4>Escolha seu estilo <a href="javascript:void(0);" onclick="deleteAllCookie()" class="btn btn-primary btn-sm    pull-right">Elimine Todos Cookies</a></h4> <div class="card-tabs"> <ul class="nav nav-tabs" role="tablist"> <li class="nav-item"><a class="nav-link active" href="#tab1" data-bs-toggle="tab">Tema</a></li><li class="nav-item"><a class="nav-link" href="#tab2" data-bs-toggle="tab">Cabeçalho</a></li><li class="nav-item"><a class="nav-link" href="#tab3" data-bs-toggle="tab">Corpo</a></li><li class="nav-item"><a class="nav-link" href="#tab4" data-bs-toggle="tab">Navegação</a></li></ul> </div><div class="tab-content tab-content-default tabcontent-border"> <div class="fade tab-pane active show" id="tab1"> <div class="admin-settings"> <div class="row"> <div class="col-sm-12"> <p>Fundo</p><select class="default-select wide form-control" id="theme_version" name="theme_version"> <option value="light">Claro</option> <option value="dark">Escuro</option> </select> </div><div class="col-sm-6"> <p>Cor Principal</p><div> <span data-bs-placement="top" data-bs-toggle="tooltip" title="Color 1"> <input class="chk-col-primary filled-in" id="primary_color_1" name="primary_bg" type="radio" value="color_1"> <label for="primary_color_1" class="bg-label-pattern"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_2" name="primary_bg" type="radio" value="color_2"> <label for="primary_color_2"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_3" name="primary_bg" type="radio" value="color_3"> <label for="primary_color_3"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_4" name="primary_bg" type="radio" value="color_4"> <label for="primary_color_4"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_5" name="primary_bg" type="radio" value="color_5"> <label for="primary_color_5"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_6" name="primary_bg" type="radio" value="color_6"> <label for="primary_color_6"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_7" name="primary_bg" type="radio" value="color_7"> <label for="primary_color_7"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_9" name="primary_bg" type="radio" value="color_9"> <label for="primary_color_9"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_10" name="primary_bg" type="radio" value="color_10"> <label for="primary_color_10"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_11" name="primary_bg" type="radio" value="color_11"> <label for="primary_color_11"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_12" name="primary_bg" type="radio" value="color_12"> <label for="primary_color_12"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_13" name="primary_bg" type="radio" value="color_13"> <label for="primary_color_13"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_14" name="primary_bg" type="radio" value="color_14"> <label for="primary_color_14"></label> </span> <span> <input class="chk-col-primary filled-in" id="primary_color_15" name="primary_bg" type="radio" value="color_15"> <label for="primary_color_15"></label> </span></div></div><div class="col-sm-6"> <p>Barra de Navegação</p><div> <span> <input class="chk-col-primary filled-in" id="nav_header_color_1" name="navigation_header" type="radio" value="color_1"> <label for="nav_header_color_1" class="bg-label-pattern"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_2" name="navigation_header" type="radio" value="color_2"> <label for="nav_header_color_2"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_3" name="navigation_header" type="radio" value="color_3"> <label for="nav_header_color_3"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_4" name="navigation_header" type="radio" value="color_4"> <label for="nav_header_color_4"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_5" name="navigation_header" type="radio" value="color_5"> <label for="nav_header_color_5"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_6" name="navigation_header" type="radio" value="color_6"> <label for="nav_header_color_6"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_7" name="navigation_header" type="radio" value="color_7"> <label for="nav_header_color_7"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_8" name="navigation_header" type="radio" value="color_8"> <label for="nav_header_color_8" class="border"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_9" name="navigation_header" type="radio" value="color_9"> <label for="nav_header_color_9"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_10" name="navigation_header" type="radio" value="color_10"> <label for="nav_header_color_10"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_11" name="navigation_header" type="radio" value="color_11"> <label for="nav_header_color_11"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_12" name="navigation_header" type="radio" value="color_12"> <label for="nav_header_color_12"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_13" name="navigation_header" type="radio" value="color_13"> <label for="nav_header_color_13"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_14" name="navigation_header" type="radio" value="color_14"> <label for="nav_header_color_14"></label> </span> <span> <input class="chk-col-primary filled-in" id="nav_header_color_15" name="navigation_header" type="radio" value="color_15"> <label for="nav_header_color_15"></label> </span></div></div><div class="col-sm-6"> <p>Cabeçalho</p><div> <span> <input class="chk-col-primary filled-in" id="header_color_1" name="header_bg" type="radio" value="color_1"> <label for="header_color_1" class="bg-label-pattern"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_2" name="header_bg" type="radio" value="color_2"> <label for="header_color_2"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_3" name="header_bg" type="radio" value="color_3"> <label for="header_color_3"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_4" name="header_bg" type="radio" value="color_4"> <label for="header_color_4"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_5" name="header_bg" type="radio" value="color_5"> <label for="header_color_5"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_6" name="header_bg" type="radio" value="color_6"> <label for="header_color_6"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_7" name="header_bg" type="radio" value="color_7"> <label for="header_color_7"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_8" name="header_bg" type="radio" value="color_8"> <label for="header_color_8" class="border"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_9" name="header_bg" type="radio" value="color_9"> <label for="header_color_9"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_10" name="header_bg" type="radio" value="color_10"> <label for="header_color_10"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_11" name="header_bg" type="radio" value="color_11"> <label for="header_color_11"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_12" name="header_bg" type="radio" value="color_12"> <label for="header_color_12"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_13" name="header_bg" type="radio" value="color_13"> <label for="header_color_13"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_14" name="header_bg" type="radio" value="color_14"> <label for="header_color_14"></label> </span> <span> <input class="chk-col-primary filled-in" id="header_color_15" name="header_bg" type="radio" value="color_15"> <label for="header_color_15"></label> </span></div></div><div class="col-sm-6"> <p>Menu Lateral</p><div> <span> <input class="chk-col-primary filled-in" id="sidebar_color_1" name="sidebar_bg" type="radio" value="color_1"> <label for="sidebar_color_1" class="bg-label-pattern"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_2" name="sidebar_bg" type="radio" value="color_2"> <label for="sidebar_color_2"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_3" name="sidebar_bg" type="radio" value="color_3"> <label for="sidebar_color_3"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_4" name="sidebar_bg" type="radio" value="color_4"> <label for="sidebar_color_4"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_5" name="sidebar_bg" type="radio" value="color_5"> <label for="sidebar_color_5"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_6" name="sidebar_bg" type="radio" value="color_6"> <label for="sidebar_color_6"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_7" name="sidebar_bg" type="radio" value="color_7"> <label for="sidebar_color_7"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_8" name="sidebar_bg" type="radio" value="color_8"> <label for="sidebar_color_8" class="border"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_9" name="sidebar_bg" type="radio" value="color_9"> <label for="sidebar_color_9"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_10" name="sidebar_bg" type="radio" value="color_10"> <label for="sidebar_color_10"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_11" name="sidebar_bg" type="radio" value="color_11"> <label for="sidebar_color_11"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_12" name="sidebar_bg" type="radio" value="color_12"> <label for="sidebar_color_12"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_13" name="sidebar_bg" type="radio" value="color_13"> <label for="sidebar_color_13"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_14" name="sidebar_bg" type="radio" value="color_14"> <label for="sidebar_color_14"></label> </span> <span> <input class="chk-col-primary filled-in" id="sidebar_color_15" name="sidebar_bg" type="radio" value="color_15"> <label for="sidebar_color_15"></label> </span></div></div></div></div></div><div class="fade tab-pane" id="tab2"> <div class="admin-settings"> <div class="row"> <div class="col-sm-6"> <p>Estilo</p><select class="default-select wide form-control" id="theme_layout" name="theme_layout"> <option value="vertical">Vertical</option> <option value="horizontal">Horizontal</option> </select> </div><div class="col-sm-6"> <p>Posição do Cabeçalho</p><select class="default-select wide form-control" id="header_position" name="header_position"> <option value="static">Estático</option> <option value="fixed">Fixo</option> </select> </div><div class="col-sm-6"> <p>Menu Lateral</p><select class="default-select wide form-control" id="sidebar_style" name="sidebar_style"> <option value="full">Completo</option> <option value="mini">Mini</option> <option value="compact">Compacto</option> <option value="overlay">Sobreposição</option> <option value="icon-hover">Icon-hover</option> </select> </div><div class="col-sm-6"> <p>Posição do Menu Latera</p><select class="default-select wide form-control" id="sidebar_position" name="sidebar_position"> <option value="static">Estático</option> <option value="fixed">Fixo</option> </select> </div></div></div></div><div class="fade tab-pane" id="tab3"> <div class="admin-settings"> <div class="row"> <div class="col-sm-6"> <p>Corpo</p><select class="default-select wide form-control" id="container_layout" name="container_layout"> <option value="wide">Largo</option> <option value="Em caixa">Em caixa</option> <option value="wide-Em caixa">Largo Em caixa</option> </select> </div><div class="col-sm-6"> <p>Fonte de Letra</p><select class="default-select wide form-control" id="typography" name="typography"> <option value="roboto">Roboto</option> <option value="poppins">Poppins</option> <option value="opensans">Open Sans</option> <option value="HelveticaNeue">HelveticaNeue</option> </select> </div><div class="col-sm-6"> <p>Direction</p><select class="default-select form-control" id="theme_direction" name="theme_direction"> <option value="ltr">LTR</option> <option value="rtl">RTL</option> </select> </div></div></div></div><div class="fade tab-pane" id="tab4"> <div class="admin-settings"> <div class="row"> <div class="col-sm-12"> <p>Cor do Menu Lateral</p><div><span data-placement="top" data-bs-toggle="tooltip" title="Color 1"><input class="chk-col-primary filled-in" id="sidebar_text_color_1" name="sidebar_text" type="radio" value="color_1"><label for="sidebar_text_color_1" class="bg-label-pattern"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_2" name="sidebar_text" type="radio" value="color_2"><label for="sidebar_text_color_2"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_3" name="sidebar_text" type="radio" value="color_3"><label for="sidebar_text_color_3"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_4" name="sidebar_text" type="radio" value="color_4"><label for="sidebar_text_color_4"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_5" name="sidebar_text" type="radio" value="color_5"><label for="sidebar_text_color_5"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_6" name="sidebar_text" type="radio" value="color_6"><label for="sidebar_text_color_6"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_7" name="sidebar_text" type="radio" value="color_7"><label for="sidebar_text_color_7"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_8" name="sidebar_text" type="radio" value="color_8"><label for="sidebar_text_color_8"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_9" name="sidebar_text" type="radio" value="color_9"><label for="sidebar_text_color_9"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_10" name="sidebar_text" type="radio" value="color_10"><label for="sidebar_text_color_10"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_11" name="sidebar_text" type="radio" value="color_11"><label for="sidebar_text_color_11"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_12" name="sidebar_text" type="radio" value="color_12"><label for="sidebar_text_color_12"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_13" name="sidebar_text" type="radio" value="color_13"><label for="sidebar_text_color_13"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_text_color_14" name="sidebar_text" type="radio" value="color_14"><label for="sidebar_text_color_14"></label></span></div></div><div class="col-sm-12"> <p>Adicione imagem ao menu lateral</p><div class="navigation-bg"><span><input class="chk-col-primary filled-in" id="sidebar_img_1" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/1.jpg"><label for="sidebar_img_1" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/1.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_2" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/2.jpg"><label for="sidebar_img_2" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/2.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_3" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/3.jpg"><label for="sidebar_img_3" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/3.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_4" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/4.jpg"><label for="sidebar_img_4" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/4.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_5" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/5.jpg"><label for="sidebar_img_5" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/5.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_6" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/6.jpg"><label for="sidebar_img_6" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/6.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_7" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/7.jpg"><label for="sidebar_img_7" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/7.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_8" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/8.jpg"><label for="sidebar_img_8" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/8.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_9" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/9.jpg"><label for="sidebar_img_9" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/9.jpg);"></label></span><span><input class="chk-col-primary filled-in" id="sidebar_img_10" name="sidebar_img_bg" type="radio" value="/xhtml/images/sidebar-img/10.jpg"><label for="sidebar_img_10" class="bg-image-sidebar" style="background-image:url(xhtml/images/sidebar-img/10.jpg);"></label></span></div></div></div></div></div></div><div class="note-text"><span class="text-danger"></div></div>';
	
	
	
	
	if($("#dzSwitcher").length == 0) {
		jQuery('body').append(dzSwitcher);
		
			
		 //const ps = new PerfectScrollbar('.sidebar-right-inner');
		 //console.log(ps.reach.x);	
			//ps.isRtl = false;
				
		  $('.sidebar-right-trigger').on('click', function() {
				$('.sidebar-right').toggleClass('show');
		  });
		  $('.sidebar-close-trigger,.bg-overlay').on('click', function() {
				$('.sidebar-right').removeClass('show');
		  });
	}
}

(function($) {
    "use strict"
	addSwitcher();

	
    const body = $('body');
    const html = $('html');

    //get the DOM elements from right sidebar
    const typographySelect = $('#typography');
    const versionSelect = $('#theme_version');
    const layoutSelect = $('#theme_layout');
    const sidebarStyleSelect = $('#sidebar_style');
    const sidebarPositionSelect = $('#sidebar_position');
    const headerPositionSelect = $('#header_position');
    const containerLayoutSelect = $('#container_layout');
    const themeDirectionSelect = $('#theme_direction');

    //change the theme typography controller
    typographySelect.on('change', function() {
        body.attr('data-typography', this.value);
		
		setCookie('typography', this.value);
    });

    //change the theme version controller
    versionSelect.on('change', function() {
		body.attr('data-theme-version', this.value);
		
		/* if(this.value === 'dark'){
			//jQuery(".nav-header .logo-abbr").attr("src", "./xhtml/images/logo-white.png");
			jQuery(".nav-header .logo-compact").attr("src", "xhtml/images/logo-text-white.png");
			jQuery(".nav-header .brand-title").attr("src", "xhtml/images/logo-text-white.png");
			
			setCookie('logo_src', './xhtml/images/logo-white.png');
			setCookie('logo_src2', 'xhtml/images/logo-text-white.png');
		}else{
			jQuery(".nav-header .logo-abbr").attr("src", "./xhtml/images/logo.png");
			jQuery(".nav-header .logo-compact").attr("src", "xhtml/images/logo-text.png");
			jQuery(".nav-header .brand-title").attr("src", "xhtml/images/logo-text.png");
			
			setCookie('logo_src', './xhtml/images/logo.png');
			setCookie('logo_src2', 'xhtml/images/logo-text.png');
		} */
		
		setCookie('version', this.value);
    }); 
	
	

    //change the sidebar position controller
    sidebarPositionSelect.on('change', function() {
        this.value === "fixed" && body.attr('data-sidebar-style') === "modern" && body.attr('data-layout') === "vertical" ? 
        alert("Sorry, Modern sidebar layout dosen't support fixed position!") :
        body.attr('data-sidebar-position', this.value);
		setCookie('sidebarPosition', this.value);
    });

    //change the header position controller
    headerPositionSelect.on('change', function() {
        body.attr('data-header-position', this.value);
		setCookie('headerPosition', this.value);
    });

    //change the theme direction (rtl, ltr) controller
    themeDirectionSelect.on('change', function() {
        html.attr('dir', this.value);
        html.attr('class', '');
        html.addClass(this.value);
        body.attr('direction', this.value);
		setCookie('direction', this.value);
    });

    //change the theme layout controller
    layoutSelect.on('change', function() {
        if(body.attr('data-sidebar-style') === 'overlay') {
            body.attr('data-sidebar-style', 'full');
            body.attr('data-layout', this.value);
            return;
        }

        body.attr('data-layout', this.value);
		setCookie('layout', this.value);
    });
    
    //change the container layout controller
    containerLayoutSelect.on('change', function() {
        if(this.value === "Em caixa") {

            if(body.attr('data-layout') === "vertical" && body.attr('data-sidebar-style') === "full") {
                body.attr('data-sidebar-style', 'overlay');
                body.attr('data-container', this.value);
                
                setTimeout(function(){
                    $(window).trigger('resize');
                },200);
                
                return;
            }
            
            
        }

        body.attr('data-container', this.value);
		setCookie('containerLayout', this.value);
    });

    //change the sidebar style controller
    sidebarStyleSelect.on('change', function() {
        if(body.attr('data-layout') === "horizontal") {
            if(this.value === "overlay") {
                alert("Sorry! Overlay is not possible in Horizontal layout.");
                return;
            }
        }

        if(body.attr('data-layout') === "vertical") {
            if(body.attr('data-container') === "Em caixa" && this.value === "full") {
                alert("Sorry! Full menu is not available in Vertical Em caixa layout.");
                return;
            }

            if(this.value === "modern" && body.attr('data-sidebar-position') === "fixed") {
                alert("Sorry! Modern sidebar layout is not available in the fixed position. Please change the sidebar position into Static.");
                return;
            }
        }

        body.attr('data-sidebar-style', this.value);

         if(body.attr('data-sidebar-style') === 'icon-hover') {
            $('.deznav').hover(function() {
			$('#main-wrapper').addClass('iconhover-toggle'); 
            }, function() {
			$('#main-wrapper').removeClass('iconhover-toggle'); 
            });
        } 
		
		setCookie('sidebarStyle', this.value);
	});

    
	
	/* jQuery("#nav_header_color_1").on('click',function(){
		jQuery(".nav-header .logo-abbr").attr("src", "./xhtml/images/logo.png");
		setCookie('logo_src', './xhtml/images/logo.png');
		return false;
    }); */
    
	/* jQuery("#sidebar_color_2, #sidebar_color_3, #sidebar_color_4, #sidebar_color_5, #sidebar_color_6, #sidebar_color_7, #sidebar_color_8, #sidebar_color_9, #sidebar_color_10, #sidebar_color_11, #sidebar_color_12, #sidebar_color_13, #sidebar_color_14, #sidebar_color_15").on('click',function(){
		jQuery(".nav-header .logo-abbr").attr("src", "./xhtml/images/logo-white.png");
		jQuery(".nav-header .brand-title").attr("src", "./xhtml/images/logo-text-white.png");
		setCookie('logo_src', './xhtml/images/logo-white.png');
		return false;
    }); */
   
    /* jQuery("#nav_header_color_3").on('click',function(){
		jQuery(".nav-header .logo-abbr").attr("src", "./xhtml/images/logo-white.png");
		setCookie('logo_src', './xhtml/images/logo-white.png');
		return false;
    }); */
	
	/* Move LTR to RTL and RTL to LTR */
	
	var currentURL      = window.location.href; 
	
	jQuery('#theme_direction').on('change',function(){
		if(currentURL.indexOf('xhtml-rtl') > -1){
			currentURL = currentURL.replace('xhtml-rtl', 'xhtml')
		}else{
			currentURL = currentURL.replace('xhtml', 'xhtml-rtl')
		}
		
		window.location.href = currentURL;
		
	});
	
	jQuery('.dz_theme_demo_rtl').on('click',function(){
		if(currentURL.indexOf('xhtml-rtl') > -1){
			currentURL = currentURL.replace('xhtml-rtl', 'xhtml')
		}else{
			currentURL = currentURL.replace('xhtml', 'xhtml-rtl')
		}
		
		window.location.href = currentURL;
	});
	
	
	//change the nav-header background controller
    $('input[name="navigation_header"]').on('click', function() {
		body.attr('data-nav-headerbg', this.value);
		$('.nav-header').removeAttr('style');
		setCookie('navheaderBg', this.value);
    });
	
    //change the header background controller
    $('input[name="header_bg"]').on('click', function() {
        body.attr('data-headerbg', this.value);
		setCookie('headerBg', this.value);
    });
	

    
	//change the sidebar text controller
    $('input[name="sidebar_text"]').on('click', function() {
        body.attr('data-sibebartext', this.value);
		setCookie('sidebarText', this.value);
    });
	
	//change the primary color controller
    $('input[name="primary_bg"]').on('click', function() {
        body.attr('data-primary', this.value);
		setCookie('primary', this.value);
    });
	
	
	//change the primary color controller
    $('input[name="sidebar_img_bg"]').on('click', function() {
		var sidebarBgImg = this.value;
		$('.deznav').css('background', 'url(' + sidebarBgImg + ')');
		$('.nav-header').css('background', 'url(' + sidebarBgImg + ')');
		$('.nav-header').addClass('light-logo');
		$('.nav-header').addClass('dez-bg');
		$('.deznav').addClass('dez-bg');
    });
    
    //change the sidebar background controller
    $('input[name="sidebar_bg"]').on('click', function() {
        body.attr('data-sibebarbg', this.value);
		$('.deznav, .nav-header').removeAttr('style');
		setCookie('sidebarBg', this.value);
        $('.deznav').removeClass('dez-bg');
    });
	
    
    $('#nav_header_color_1').on('click', function() {
		$('.nav-header').removeClass('light-logo');
    });
	
	

})(jQuery);


