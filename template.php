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
	// Front Page processing
 	if($vars['is_front']) {
		drupal_add_css("{$theme_path}/css/bhutan-front.css"); 
		$vars['submitted'] = '';
	}
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
				$vars['theme_hook_suggestions'][] = 'region__banner_front';
				// Use try block incase front page is not a node
				try {
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
				
				// Add Search block to variables for rendering on Front Page
				if(module_exists('search')) {
					$vars['search_block'] = module_invoke('search', 'block_view', 'form');
				}
			}
			break;
		
		// Default only for debugging
		default:
			//print "<p><b>REGION: </b> {$vars['region']}</p>";
	}
}


/**
 * Implements hook_preprocess_entity: for preprocessing field collections
 */

function sarvaka_bhutan_preprocess_entity(&$vars) {
	if($vars['entity_type'] == 'field_collection_item' && $vars['elements']['#bundle'] == 'field_collection_teaser') {
		//dpm($vars, 'vars in pp entity');
		// TODO: Adjust this hack to a more sustainable version for I18N
		$vars['title'] = $vars['field_title'][0]['safe_value'];
		$vars['description'] = $vars['field_description'][0]['safe_value'];
		$vars['icon_class'] = $vars['field_icon_class'][0]['safe_value'];
		$vars['title'] = $vars['field_title'][0]['safe_value'];
		$vars['is_odd'] = (($vars['id'] % 2) == 0) ? FALSE : TRUE;
		$fl = '<ul>';
		foreach($vars['field_featured_resources'] as $n => $item) {
			$fl .= "<li><a href=\"{$item['url']}\">{$item['title']}</a></li>";
		}
		$fl .= '</ul>';
		$vars['featured_links'] = $fl;
	}
}
