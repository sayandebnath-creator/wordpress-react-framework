<?php
function enqueue_custom_block() {
    wp_enqueue_script('custom-block', plugin_dir_url(__FILE__) . '../assets/js/gutenberg-block.js', array('wp-blocks', 'wp-element'), null, true);
}

add_action('enqueue_block_editor_assets', 'enqueue_custom_block');
?>