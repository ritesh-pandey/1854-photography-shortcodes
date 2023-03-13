<?php
/**
 * Plugin Name: 1854.photography Shortcodes
 * Description: Provides custom shortcodes which can be used to render custom HTML across site.
 * Version: 2
 * Author: Ritesh Pandey
 */

register_activation_hook(__FILE__, function() {});
register_deactivation_hook(__FILE__, function() {});

/**
 * Callback function for Zephr landing page for editorial join us page 
 */
function p10y_1854_shrtcd_zephr_join_us_editorial($atts) {
	$columns = empty($atts['columns']) ? [] : explode(',', $atts['columns']);
	$columns = ['dl', 'dps'];
	$featuredPlan = '';
	ob_start();
	include plugin_dir_path(__FILE__) . 'zephr-join-us-editorial/pricing-matrix.php';
	$html = ob_get_clean();
	return $html;
}
add_shortcode('p10y_1854_z', 'p10y_1854_shrtcd_zephr_join_us_editorial');

/**
 * Callback function for Journal Collection Menu
 */
function p10y_1854_shrtcd_journal_collection_menu($atts) {
	ob_start();
	include plugin_dir_path(__FILE__) . 'journal-collection-menu/p10y_1854_journal_collection_menu.php';
	$html = ob_get_clean();
	return $html;
}
add_shortcode('p10y_1854_journal_collection_menu', 'p10y_1854_shrtcd_journal_collection_menu');