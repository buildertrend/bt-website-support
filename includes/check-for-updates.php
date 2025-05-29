<?php
// Prevent direct access
if (!defined('ABSPATH')) {
	exit;
}

require plugin_dir_path(dirname(__FILE__)) . 'plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/buildertrend/bt-website-support',
	plugin_dir_path(dirname(__FILE__)) . 'bt-website-support.php',
	'bt-website-support'
);

// Required for private repos:
// $updateChecker->setAuthentication('your_github_personal_access_token');

// Optional if you're using a branch other than "master" (e.g., main)
$updateChecker->setBranch('main');