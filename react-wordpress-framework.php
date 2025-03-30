<?php
/**
 * Plugin Name: React WordPress Framework
 * Description: A framework to easily integrate React into WordPress themes and plugins.
 * Version: 1.0
 * Author: Your Name
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/enqueue-scripts.php';
require_once plugin_dir_path(__FILE__) . 'includes/register-shortcodes.php';
require_once plugin_dir_path(__FILE__) . 'includes/register-blocks.php';

