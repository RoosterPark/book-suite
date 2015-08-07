function initIsotope() {
	// init Isotope
	var $grid = $('.grid').isotope({
		layoutMode : 'packery',
		itemSelector : '.grid-item',
		percentPosition : true,
		packery : {
			gutter : '.gutter-sizer',
		//rowHeight: 25
		}

	});
	$grid.isotope('shuffle');
	// layout Isotope after each image loads
	$grid.imagesLoaded().progress(function() {
		$grid.isotope('layout');
	});

	// bind filter button click
	jQuery('#filters .cat-child, #filters .reset').on('click', 'a', function() {
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
}
jQuery(window).on('load', function() {
	initIsotope();
}); 