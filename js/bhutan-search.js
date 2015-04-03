(function ($) { // jQuery wrapper function

	Drupal.behaviors.bhutan_search_deafultOpen = {
		attach: function (context, settings) {
				if($(".flyout-open").length ) { 
					$("#search-flyout").once('openflyout', function() {
						$(this).openMbExtruder();
						$('#kmaps-search .treeview a').click();
						setTimeout(function() {
							if($('#ajax-id-8260').length > 0) {
								var topPos = document.getElementById('ajax-id-8260').offsetTop;
								document.getElementById('tree').scrollTop = topPos;
							} 
						}, 2500);
					});
				}
				
    }
  };	
  			
} (jQuery));