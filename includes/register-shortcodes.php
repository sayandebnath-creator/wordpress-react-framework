<?php
function react_shortcode() {
    return '<div id="react-root"></div>';
}

add_shortcode('react_app', 'react_shortcode');
?>