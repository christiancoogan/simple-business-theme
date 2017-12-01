<?php get_header(); ?>

<div class="blog-header">
    <div class="container">
        <?php
            // Display optional category description
            if ( category_description() ) : ?>
            <div class="archive-meta">
                <strong class="blog-title text-center"><?php echo category_description(); ?></strong>
        </div>
            <?php endif; ?>
        <h2 class="lead blog-description text-center">Follow us for up to date medical news!</h2>
    </div>
</div>

<main role="main" class="container">

    <div class="row blog">

        <!-- BLOG SECTION -->
        <div class="col-sm-8 blog-main">
            
            <?php
            // Display optional category description
            if ( category_description() ) : ?>
            <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
                <h2 class="blog-post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="blog-post-meta"><?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                <?php the_post_thumbnail('thumbnail') ?>
                <?php the_excerpt(); ?>
                <ul class="pager">
                    <li><a href="<?php echo get_permalink(); ?>">Read More</a></li>
                </ul>
            </article><!-- /.blog-post -->

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'simplebusiness' ); ?></p>
            <?php endif; ?>

            <nav class="blog-pagination">
                <ul>
                    <li><?php next_posts_link('&larr; Older Posts'); ?></li>
                    <li><?php previous_posts_link('Newer Posts &rarr;'); ?></li>
                </ul>

            </nav>

        </div><!-- /.blog-main -->

        <!-- SIDEBAR SECTION -->
        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <?php get_sidebar(); ?>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->




<?php get_footer(); ?>        