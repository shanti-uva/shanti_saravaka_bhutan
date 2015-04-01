(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {

if($(".breadcrumb > li:eq(-1):contains('Bhutan Cultural Library')") && ($("body:contains('.flyout-open.page-places')"))) { $("#search-flyout").openMbExtruder().once(); }

if($(".breadcrumb > li:eq(-1):contains('Bhutan')") && ($("body:contains('.flyout-open.page-subjects')"))) { $("#search-flyout").openMbExtruder().once(); }
				
    }
  };	
  			
} (jQuery));