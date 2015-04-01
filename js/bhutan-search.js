(function ($) { // jQuery wrapper function

	// Move the dom-id class so that the view block reloads all content and so does not duplicate filters, pager, etc.
	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {
			if(context == window.document) { 

				$("body.front #search-flyout").openMbExtruder().once();
				
      }
    }
  };	
  			
} (jQuery));