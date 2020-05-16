<?php
add_action( 'wp_enqueue_scripts', 'kawi_child_scripts' );
/**
 * Loads parent styles
 */
function twentynineteen_child_scripts(){
    wp_enqueue_style( 'parent-styles', get_template_directory_uri() . '/style.css' );
}

