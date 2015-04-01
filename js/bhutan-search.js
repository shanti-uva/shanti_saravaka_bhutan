(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {

				if($(".breadcrumb > li:eq(-1):contains('Bhutan Cultural Library')") && ($(".breadcrumb > li:eq(1):contains('Home')"))) { $("#search-flyout").openMbExtruder().once(); }
				
				if($(".breadcrumb > li:eq(-1):contains('Bhutan')") && ($(".breadcrumb > li:eq(1):contains('Places')"))) { $("#search-flyout").openMbExtruder().once(); }
				
    }
  };	
  			
} (jQuery));