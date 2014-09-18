<?php

// add theme scripts - gfh
function nwri_scripts() {
        wp_enqueue_style( 'jqueryui-dialog', '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css' );
        wp_enqueue_script( 'jquery-apply', get_stylesheet_directory_uri() . '/js/nwri-apply.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'nwri_scripts' );

// register sidebars

if ( function_exists('register_sidebar') )
    if ( function_exists('register_sidebar') )
        register_sidebar(array('name'=>'Right Sidebar2', //Name your sidebar
        'description' => 'These widgets will appear in the left sidebar.',
        'before_widget' => '<div class="widget">', // Displays before widget
        'after_widget' => '</div>', // Displayed after widget
        'before_title' => '<h3>', //Displays before title, after widget start
        'after_title' => '</h3>' //Displays after title
    ));
?>