<?php
/**
 * Plugin Name: 1854.photography Shortcodes
 * Description: Provides custom shortcodes which can be used to render custom HTML across site.
 * Version: 1
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
	include plugin_dir_url(__FILE__) . 'zephr-join-us-editorial/pricing-matrix.php';
	$html = ob_get_clean();
	return $html;
}
add_shortcode('p10y_1854_z', 'p10y_1854_shrtcd_zephr_join_us_editorial');
