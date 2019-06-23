<?php get_header(); ?>

<div id="carousel-small">
<img src="<?php
            # in Wordpress every link has to be absolute
            # retrieves the absolute path to this theme
            # https://developer.wordpress.org/reference/functions/get_template_directory_uri/
            echo get_template_directory_uri();
        ?>/images/200x1100_Red_Bridge.jpeg" alt="karusellbild - bridge and sky" height="200" width="1100" />
</div><!-- /carousel-small -->

<div id="content"> 
</div><!-- /content -->

<?php get_sidebar(); ?>
<?php get_footer(); # getting the file footer.php ?>