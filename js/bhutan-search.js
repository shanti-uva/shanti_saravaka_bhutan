(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {
			// if(context == window.document) { 

				if($(".breadcrumb").length ) { $("#search-flyout").openMbExtruder().once(); }
				
      // }
    }
  };	
  			
} (jQuery));