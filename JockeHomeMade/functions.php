<?php
/*
 * Define me some sidebars
 * =============================================================== */
/* When this is present in the theme-catalogue, an option to edit
and fill this with activated widgets becomes available in the
Dashboard. */

if(function_exists('register_sidebar')) {
    
# 'id' matched against sidebar.php -> dynamic_sidebar('main-sidebar')
    register_sidebar( 
        array(
            'name' => 'Main sidebar',
            'id' => 'main-sidebar',
            'description' => 'Main sidebar used on the content pages',
            'before_widget' => '<section class="widget-container">',
            'after_widget' => '</section><!-- /widget-container -->',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div><!-- /widget-title -->'
    ));

    register_sidebar( 
        array(
            'name' => 'Callout Left',
            'id' => 'callout-left',
            'description' => 'Callout to the left ',
            'before_widget' => '<div class="callout callout-left">',
            'after_widget' => '</div><!-- /callout -->',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
    ));

    register_sidebar( 
        array(
            'name' => 'Callout Middle',
            'id' => 'callout-middle',
            'description' => 'Callout in the middle',
            'before_widget' => '<div class="callout callout-middle">',
            'after_widget' => '</div><!-- /callout -->',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
    ));

    register_sidebar( 
        array(
            'name' => 'Callout Right',
            'id' => 'callout-right',
            'description' => 'Callout to the right',
            'before_widget' => '<div class="callout callout-right">',
            'after_widget' => '</div><!-- /callout -->',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
    ));
}

 ?>