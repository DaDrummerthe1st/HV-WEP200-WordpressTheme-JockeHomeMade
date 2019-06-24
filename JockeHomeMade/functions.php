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

/*
 * Give theme support for changing logo
 * https://developer.wordpress.org/themes/functionality/custom-logo/
 * =============================================================== */

# if width and height are not specified with a unit, px is set
# default-image - make sure it is set.
#  the get_template_directory_uri() does not provide a tailing /
# uploads => true = its ok to use the uploads directory
 $args = array(
    'width'         => '180',
    'height'        => '39',
    'default-image' => get_template_directory_uri() . '/images/logo.png',
    'uploads'       => true
);


?>