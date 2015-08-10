function initIsotope() {
	// init Isotope
	var $grid = $('.grid').isotope({
		layoutMode : 'packery',
		itemSelector : '.grid-item',
		percentPosition : true,
		packery : {
			gutter : '.gutter-sizer',
		}
	});
	
	// layout Isotope after each image loads
	$grid.imagesLoaded().progress(function() {
		$grid.isotope('layout');
		
	});
	
	//$grid.isotope('shuffle');

	// bind filter button click
	jQuery('#filters .cat-child, #filters .reset').on('click', 'a', function() {
		var filterValue = jQuery(this).attr('data-filter');
		$grid.isotope({
			filter : filterValue
		});
	});
	
	// bind Grid item Category List filter <a> click
	jQuery('#gridItemFilter .cat-item').on('click', 'a', function() {
		var filterValue = jQuery(this).attr('data-filter');
		$grid.isotope({
			filter : filterValue
		});
	});
	
	// change is-checked class on buttons
	jQuery('.option-set').each(function(i, buttonGroup) {
		var $buttonGroup = jQuery(buttonGroup);

		$buttonGroup.on('click', 'a', function() {
			$buttonGroup.find('.selected').removeClass('selected');
			jQuery(this).addClass('selected');
		});
	});
	
	// change is-checked class on buttons
	jQuery('.cat-item-set .cat-item').each(function(i, buttonGroup) {
		var $buttonGroup = jQuery(buttonGroup);

		$buttonGroup.on('click', 'a', function() {
			$buttonGroup.find('.selected').removeClass('selected');
			jQuery(this).addClass('selected');
		});
	});
}
jQuery(window).on('load', function() {
	
	initIsotope();
	
	var yPo = jQuery('.jumbotron').height();
	
	jQuery('#gridItemFilter .cat-item').on('click', 'a', function() {
		console.log(yPo);
		jQuery('html, body, #successStories').animate({scrollTop : yPo},800);
	});
	
	jQuery('#filters .cat-child, #filters .reset').on('click', 'a', function() {
		console.log(yPo);
		jQuery('html, body, #successStories').animate({scrollTop : yPo},800);
	});
	
	if (Modernizr.touch) 	{ 
		jQuery('#mobileFilterBtn').on('click', function(e) {
			e.preventDefault();
			$( ".grid-menu" ).toggle( 300,'linear');
		});
	}
	
	
}); 