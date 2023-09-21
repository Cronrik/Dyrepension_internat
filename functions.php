<?php
function dyrtema_files(){
    wp_enqueue_style('dyrtema_main_style', get_theme_file_uri("Assets/css/style.css"));
}
add_action('wp_enqueue_scripts', 'dyrtema_files');


add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) )
?>