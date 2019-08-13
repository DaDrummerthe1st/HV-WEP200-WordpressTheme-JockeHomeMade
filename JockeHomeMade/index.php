<?php get_header(); ?>

<div id="carousel-small">
<img src="http://lorempixel.com/1100/200/city/9/" alt="karusellbild - bridge and sky" height="200" width="1100" />
</div><!-- /carousel-small -->

<div id="content">
<?php
    # https://codex.wordpress.org/The_Loop 
    # Not really written the same way here, but this way doesnt render an error
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post">

        <header class="post">

            <section class="entry-title">
                <h2>
                    <a href="<?php
                                the_permalink();
                                ?>"
                        title="<?php
                                the_title_attribute();
                                ?>"
                        rel="bookmark"><?php
                            the_title();
                    ?></a>
                </h2>
            </section><!-- /entry-title -->

            <section class="entry-meta">
                <p>
                Written by <?php the_author_posts_link(); ?>
                on <?php the_time('j F Y'); ?>
                in <?php the_category(', '); # In order to later sort different kinds of posts, use get_category_ID() ?>.
                    <?php
                        if(comments_open()) {
                            # comments-link is defined in wp
                            echo '<span class="comments-link"><a href="' . get_comments_link() . '">Comment!</a></span>';
                        } else {
                            echo ' Not possible to comment!';
                        }
                    ?>
                </p>
            </section><!-- /entry-meta -->

        </header><!-- /post -->
        
        <section class="entry-content">
            <?php the_content(); ?>
        </section><!-- /entry-content -->

        <footer class="post">
        </footer><!-- /post -->

    </article><!-- /post -->
<?php endwhile; else: ?>

    <section class="entry-title">
        <h2>Doh!</h2>
    </section><!-- /entry-title -->

    <section class="entry-content">
        <p>There's is nothing to show</p>
    </section><!-- /entry-content -->

<?php endif; ?>
</div><!-- /content -->

<?php get_sidebar(); ?>
<?php get_footer(); # getting the file footer.php ?>