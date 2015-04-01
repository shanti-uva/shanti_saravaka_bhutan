(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {
			// if(context == window.document) { 

				if($(".breadcrumb > li:eq(-1):contains('Bhutan Cultural Library')").length ) { $("#search-flyout").openMbExtruder().once(); }
				
      // }
    }
  };	
  			
} (jQuery));