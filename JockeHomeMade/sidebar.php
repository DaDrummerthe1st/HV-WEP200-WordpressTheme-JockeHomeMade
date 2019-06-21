<aside id="sidebar">
    <!-- in order to enable widgets two things needs to be present:
    1. define where the sidebar should locate on the page
    2. define presence in functions.php -->
    <?php 
        # used to insert sidebar
        # the argument is which sidebar to use
        dynamic_sidebar( 'main-sidebar' );
    ?>
</aside><!-- /sidebar -->