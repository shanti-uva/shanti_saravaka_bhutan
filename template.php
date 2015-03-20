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
 * Implements hook_preprocess_region: switch adjust variables on a case by case basis as needed
 */
function sarvaka_bhutan_preprocess_region(&$vars) {
	switch ($vars['region']) {
		
		// Header Region
		case 'header':
			//print implode('<br/>', array_keys($vars));
			//print var_export($vars['theme_hook_suggestions']);
			$vars['shanti_site'] = theme_get_setting('shanti_site');
			$vars['home_url'] = url(variable_get('site_frontpage', 'node'));
			$vars['site_name'] =  variable_get('site_name');
			$vars['logo'] =  theme_get_setting('logo');
			$vars['site_slogan'] =  variable_get('site_slogan');
			break;
		
		// Banner Region
		case 'banner':
			$vars['theme_hook_suggestions'][] = 'region__banner_front';
			break;
		
		// Default only for debugging
		default:
			//print "<p><b>REGION: </b> {$vars['region']}</p>";
	}
}

/**
 * Implements hook_preprocess_page
 */  
 
 function sarvaka_bhutan_preprocess_page(&$vars) {
 	$theme_path = drupal_get_path('theme', 'sarvaka_bhutan');
 	if($vars['is_front']) { drupal_add_css("{$theme_path}/css/bhutan-front.css"); }
}
