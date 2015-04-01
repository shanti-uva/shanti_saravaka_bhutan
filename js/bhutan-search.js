(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {
			if(context == window.document) { 

				if($("body.front #search-flyout").length ).openMbExtruder().once();
				
      }
    }
  };	
  			
} (jQuery));