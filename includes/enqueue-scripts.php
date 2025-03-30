<?php
function enqueue_react_framework_scripts() {
    wp_enqueue_script('react-framework', plugin_dir_url(__FILE__) . '../assets/js/react-app.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_react_framework_scripts');
?>