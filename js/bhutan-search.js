(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {
			if(context == window.document) { 

				if($(".breadcrumb li:last:contains('Bhutan Library')").length ).openMbExtruder().once();
				
      }
    }
  };	
  			
} (jQuery));