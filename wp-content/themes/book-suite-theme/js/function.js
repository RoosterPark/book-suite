// JavaScript Document
jQuery(document).ready(function() {
	//Add Bootstrap button styling to Main Nav Links
	
	jQuery('.request-btn a').addClass('btn btn-primary');
	jQuery('.login-btn a').addClass('btn btn-default clear');
	
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
	
	var gridHeight =  jQuery('.grid').height();
	jQuery("img.lazy").show().lazyload({
		threshold : -200,
		effect : "fadeIn",
		effectspeed: 100,
		failure_limit : 10
    });
	jQuery(function() {
		jQuery('.jumpTo a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = jQuery(this.hash);
		      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        jQuery('html,body').animate({
		          scrollTop: target.offset().top - 50
		        }, 1000);
		        return false;
		      }
		    }
		});
//		jQuery('.opt-jumpmenu a[href*=#]:not([href=#])').click(function() {
//		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//		      var target = jQuery(this.hash);
//		      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
//		      if (target.length) {
//		        jQuery('html,body').animate({
//		          scrollTop: target.offset().top - 50
//		        }, 1000);
//		        return false;
//		      }
//		    }
//		});
	});
});

