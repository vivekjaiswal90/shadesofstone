
jQuery(document).ready(function () {

	jQuery(' #narrow-by-list  > .block-options-list > .block-title').click(function(){

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













