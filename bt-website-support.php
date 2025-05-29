<?php
/*
Plugin Name: Buildertrend Pro Websites Support
Description: Our required plugin for website support. 
Version: 1.0.2
Author: BT Pro Websites Team
License: GPLv2 or later
Plugin URI:        https://github.com/buildertrend/bt-website-support
GitHub Plugin URI: https://github.com/buildertrend/bt-website-support
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}


require_once plugin_dir_path(__FILE__) . 'includes/admin-dashboard-support-form.php';
// require_once plugin_dir_path(__FILE__) . 'includes/check-for-updates.php';
// require_once plugin_dir_path(__FILE__) . 'includes/enable-auto-updates.php';
require_once plugin_dir_path(__FILE__) . 'includes/remove-dashboard-widgets.php';
require_once plugin_dir_path(__FILE__) . 'includes/reset-dashboard-widgets.php';


// bt contact form
// bt login box
// format prices
// required plugins
