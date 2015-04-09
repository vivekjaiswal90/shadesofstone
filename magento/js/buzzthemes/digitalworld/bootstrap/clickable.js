
jQuery(document).ready(function () {

	
	jQuery('.sidebar > .block > .block-title').click(function(){
	 if (!jQuery(this).hasClass('active')){				  
			jQuery(this).next().slideToggle();
		  jQuery(this).addClass('active'); 
	} 
	   else if (jQuery(this).hasClass('active')) {
			jQuery(this).next().slideToggle();
			jQuery(this).removeClass('active');
	}   
	});
	

	
	jQuery('.box-link-footer-content > .box-link  > .title-box-link-footer').click(function(){
	jQuery('.box-link-footer-content > .box-link  > .box-link-content').slideUp();
	if (!jQuery(this).hasClass('active')){				  
		jQuery(this).next().slideToggle();
		jQuery('.box-link-footer-content > .box-link  > .title-box-link-footer').removeClass('active');
		jQuery(this).addClass('active');
	}
	else if (jQuery(this).hasClass('active')) {
		jQuery(this).removeClass('active');
	}
	});
	
	
		/*-- detail product in my cart sidebar  --*/
	
	jQuery('.sidebar .block-cart .truncated a.details').click(function(){
	 if (!jQuery(this).hasClass('active')){				  
			jQuery(this).next().slideToggle();
		  jQuery(this).addClass('active'); 
	} 
	   else if (jQuery(this).hasClass('active')) {
			jQuery(this).next().slideToggle();
			jQuery(this).removeClass('active');
	}   
	});
	
});













