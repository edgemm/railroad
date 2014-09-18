<?php

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