if( jQuery(".toggle2 .toggle-title2").hasClass('active') ){
		jQuery(".toggle2 .toggle-title2.active").closest('.toggle2').find('.toggle-inner2').show();
	}
	jQuery(".toggle2 .toggle-title2").click(function(){
		if( jQuery(this).hasClass('active') ){
			jQuery(this).removeClass("active").closest('.toggle2').find('.toggle-inner2').slideUp(200);
		}
		else{	jQuery(this).addClass("active").closest('.toggle2').find('.toggle-inner2').slideDown(200);
		}
	});