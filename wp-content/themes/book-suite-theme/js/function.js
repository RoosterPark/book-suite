// JavaScript Document
jQuery(document).ready(function() {
	//Add Bootstrap button styling to Main Nav Links
	
	jQuery('.request-btn a').addClass('btn btn-primary');
	jQuery('.login-btn a').addClass('btn btn-default clear');

//	jQuery('.grid').isotope({
//		layoutMode: 'packery',
//	    itemSelector: '.grid-item',
//	    percentPosition: true,
//	    packery: {
//	      gutter: '.gutter-sizer',
//		  //rowHeight: 15
//		}
//  	}); 
	
	
	//Check to see if the window is top if not then display button
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.scroll-to-top').fadeIn();
		} else {
			jQuery('.scroll-to-top').fadeOut();
		}
	});

	//Click event to scroll to top
	jQuery('.scroll-to-top').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});
	$(function() {
		$('.carousel-caption a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		});
	});
});

