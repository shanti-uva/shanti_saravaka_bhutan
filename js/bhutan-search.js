(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {

				if($(".flyout-open").length ) { $("#search-flyout").openMbExtruder().once(); }
				
    }
  };	
  			
} (jQuery));