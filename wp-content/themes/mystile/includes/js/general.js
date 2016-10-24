/*-----------------------------------------------------------------------------------*/
/* GENERAL SCRIPTS */
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($){

	// Fix dropdowns in touch devices
	if ( jQuery( 'html' ).hasClass( 'touch' ) ) {
		$( '.nav li:has(ul)' ).doubleTapToGo();
	}

	// Table alt row styling
	jQuery( '.entry table tr:odd' ).addClass( 'alt-table-row' );

	// FitVids - Responsive Videos
	jQuery( ".post, .widget, .panel" ).fitVids();

	// Add class to parent menu items with JS until WP does this natively
	jQuery("ul.sub-menu").parents('li').addClass('parent');


	// Responsive Navigation (switch top drop down for select)
	jQuery('ul#top-nav').mobileMenu({
		switchWidth: 767,                   //width (in px to switch at)
		topOptionText: 'Select a page',     //first option text
		indentString: '&nbsp;&nbsp;&nbsp;'  //string for indenting nested items
	});

	var tel1 = jQuery('#tel-1 p:first').text();
	jQuery('#tel-1 p:first').wrapInner('<a class = "link-for-mobile" "href=tel:' + tel1 + '"></a>');

	var tel2 = jQuery('#tel-2 p:first').text();
	jQuery('#tel-2 p:first').wrapInner('<a class = "link-for-mobile" "href=tel:' + tel2 + '"></a>');

  	// Show/hide the main navigation
  	jQuery('.nav-toggle').click(function() {
	  jQuery('#navigation').slideToggle('fast', function() {
	  	return false;
	    // Animation complete.
	  });
	});

	// Stop the navigation link moving to the anchor (Still need the anchor for semantic markup)
	jQuery('.nav-toggle a').click(function(e) {
        e.preventDefault();
    });

    // Add parent class to nav parents
	jQuery("ul.sub-menu, ul.children").parents().addClass('parent');

});