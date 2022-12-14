<?php 
function custom_javascript() {
    wp_register_script('script-geral', get_template_directory_uri() . '/js/scripts.js', [], false, true);
    wp_enqueue_script('script-geral');
}
add_action('wp_enqueue_scripts', 'custom_javascript');

?>