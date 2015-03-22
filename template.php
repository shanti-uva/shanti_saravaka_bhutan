<?php

/**
 * @file
 * template.php
 *  
 * @description
 * The main template.php file for Bhutan Oral Traditions Theme subtheme of Shanti Sarvaka
 * 
 */

/**
 * Implements hook_preprocess_page
 */  
 
 function sarvaka_bhutan_preprocess_page(&$vars) {
 	$theme_path = drupal_get_path('theme', 'sarvaka_bhutan');
 	if($vars['is_front']) { drupal_add_css("{$theme_path}/css/bhutan-front.css"); }
}

/**
 * Implements hook_preprocess_region: switch adjust variables on a case by case basis as needed
 */
function sarvaka_bhutan_preprocess_region(&$vars) {
	switch ($vars['region']) {
		// Header Region
		case 'header':
			$vars['shanti_site'] = theme_get_setting('shanti_site');
			$vars['home_url'] = url(variable_get('site_frontpage', 'node'));
			$vars['site_name'] =  variable_get('site_name');
			$vars['logo'] =  theme_get_setting('logo');
			$vars['site_slogan'] =  variable_get('site_slogan');
			break;
		
		// Banner Region
		case 'banner':
			if(!empty($vars['is_front'])) {
								
				try {
					$vars['theme_hook_suggestions'][] = 'region__banner_front';
					$fpath = variable_get('site_frontpage', 'node');
					$fppts = explode('/', $fpath);
					if(is_array($fppts) && count($fppts) > 1) {
						$fid = $fppts[1];
						$fode = node_load($fid);
						$vars['node'] = $fode;
						$ew = entity_metadata_wrapper('node', $fode);
						$vars['grid_inset_text'] = $ew->field_grid_inset->value();
						$vars['overview_text'] = $ew->field_overview->value();
					} else {
						throw new Exception('Front Page is not a node in preprocess_region');
					}
				 
				} catch (Exception $e) {
					watchdog('bhutan theme', 'Exception caught in preprocess banner region: ' . $e->getMessage());
				}
			}
			break;
		
		// Default only for debugging
		default:
			//print "<p><b>REGION: </b> {$vars['region']}</p>";
	}
}
