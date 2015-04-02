(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {

				if($(".flyout-open").length ) { 
					$("#search-flyout").once('openflyout', function() {
						$(this).openMbExtruder();
						$('#kmaps-search .treeview a').click();
					} );
				}
				
    }
  };	
  			
} (jQuery));