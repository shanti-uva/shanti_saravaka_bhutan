<?php

/**
 * @file
 * template.php for Bhutan Oral Traditions Theme based on Shanti Sarvaka
 */
 
	
  function sarvaka_bhutan_preprocess_region(&$vars) {
		switch ($vars['region']) {
			case 'header':
				//print implode('<br/>', array_keys($vars));
				//print var_export($vars['theme_hook_suggestions']);
				$vars['shanti_site'] = theme_get_setting('shanti_site');
  			$vars['home_url'] = url(variable_get('site_frontpage', 'node'));
				$vars['site_name'] =  variable_get('site_name');
				$vars['logo'] =  theme_get_setting('logo');
				$vars['site_slogan'] =  variable_get('site_slogan');
				break;
				
			case 'banner':
				$vars['theme_hook_suggestions'][] = 'region__banner_front';
				break;
				
			default:
				//print "<p><b>REGION: </b> {$vars['region']}</p>";
		}
  }

  