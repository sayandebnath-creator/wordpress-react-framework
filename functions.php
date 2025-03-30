<?php
function react_theme_enqueue_scripts() {
    wp_enqueue_script('react-app', get_template_directory_uri() . '/dist/bundle.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'react_theme_enqueue_scripts');
?>
