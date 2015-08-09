

jQuery(document).ready(function () {


		jQuery('.right-top-header .dropdown-toggle').click(function(){
	
	if (!jQuery(this).hasClass('active')){				  
		jQuery('.right-top-header .links').slideToggle();
		jQuery('.right-top-header .dropdown-toggle').addClass('active');
	}
	else if (jQuery(this).hasClass('active')) {
		jQuery('.right-top-header .links').slideToggle();
		jQuery('.right-top-header .dropdown-toggle').removeClass('active');
	}
	});

	
	jQuery('.nav-top .dropdown-toggle').click(function(){
	
	if (!jQuery(this).hasClass('active')){				  
		jQuery('.nav-top .dropdown-menu').slideToggle();
		jQuery('.nav-top .dropdown-toggle').addClass('active');
	}
	else if (jQuery(this).hasClass('active')) {
		jQuery('.nav-top .dropdown-menu').slideToggle();
		jQuery('.nav-top .dropdown-toggle').removeClass('active');
	}
	});

	
	
	jQuery( ".nav-top .dropdown-menu-content > li.level0.parent" ).append( "<a class='right show-cat' href='javascript://'>&nbsp;</a>" );
	
	jQuery('.nav-top .dropdown-menu-content > li > a.show-cat').click(function(){
	jQuery('.nav-top .dropdown-menu-content li ul.level0').slideUp();
	if (!jQuery(this).hasClass('active')){				  
		jQuery(this).prev().slideToggle();
		jQuery('.nav-top .dropdown-menu-content li a.show-cat').removeClass('active');
		jQuery(this).addClass('active');
	}
	else if (jQuery(this).hasClass('active')) {
		jQuery(this).removeClass('active');
	}
	});
	
	
	
	/*top-header*/
	
	jQuery('.top-header-container .action-top-header').click(function(){
	
	if (!jQuery(this).hasClass('active')){				  
		jQuery('.top-header-container .top-header').slideToggle();
		jQuery('.top-header-container .action-top-header').addClass('active');
	}
	else if (jQuery(this).hasClass('active')) {
		jQuery('.top-header-container .top-header').slideToggle();
		jQuery('.top-header-container .action-top-header').removeClass('active');
	}
	});
	
	
	/*footer links*/
	
	jQuery('.footer-container .action-footer').click(function(){
	
	if (!jQuery(this).hasClass('active')){				  
		jQuery('.footer-container  .box-link-footer-container').slideToggle();
		jQuery('.footer-container .action-footer').addClass('active');
	}
	else if (jQuery(this).hasClass('active')) {
		jQuery('.footer-container .box-link-footer-container').slideToggle();
		jQuery('.footer-container .action-footer').removeClass('active');
	}
	});
	
	
	
	
});








