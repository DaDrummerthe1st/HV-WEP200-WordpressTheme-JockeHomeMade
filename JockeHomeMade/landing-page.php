<?php
/*
 * Template name: Landing Page
 * Description: A big landing page for the site
 */
?>
<?php 
/*
 * Notes:
 * Just by creating this template file (naming it Template name) and 
 * putting it in my theme-folder, WP automatically admits it and uses
 * it when creating new pages
 * A page template is an alternative to the rest of the site
 */
?>

<?php get_header(); ?>
<div id="carousel-big">
    <img src="http://lorempixel.com/1100/600/city/9/" alt="karusellbild - bridge and sky" height="600" width="1100" />
</div><!-- /carousel-small -->

<div id="fullwidth">
    <div id="callouts-area" class="clearfix">

        <div class="column one-third">
            <?php dynamic_sidebar( 'callout-left' ); // from functions.php ?>
        </div><!-- /one-third -->

        <div class="column one-third">
            <?php dynamic_sidebar( 'callout-middle' ); // from functions.php ?>
        </div><!-- /one-third -->

        <div class="column one-third">
            <?php dynamic_sidebar( 'callout-right' ); // from functions.php ?>
        </div><!-- /one-third -->

    </div><!-- /callouts-area -->

    <?php
    // Wordpress loop in order to present some text 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
        <article class="landing">
            <header>
                <h2><?php the_title(); ?></h2>
            </header>
            
            <section>
                <?php the_content(); ?>
            </section>

            <footer>

            </footer>
        </article><!-- /landing -->
    <?php endwhile; else: ?>

        <section class="landing">
            <h2>Doh!</h2>
        </section><!-- /entry-title -->

        <section class="entry-content">
            <p>There's is nothing to show</p>
        </section><!-- /entry-content -->

    <?php endif; ?>


</div><!-- /fullwidth -->


<?php get_footer(); ?>