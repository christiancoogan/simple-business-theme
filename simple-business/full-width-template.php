<?php /* Template Name: Full Width Template (no sidebar) */ ?>
<?php get_header(); ?>

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Medical news in your area</h1>
        <h2 class="lead blog-description text-center">Follow us for up to date medical news!</h2>
    </div>
</div>

<main role="main" class="container">

    <div class="row blog">

        <!-- BLOG SECTION -->
        <div class="col-sm-8 col-sm-offset-2 blog-main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blog-post">
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p class="blog-post-meta"><?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div><!-- /.blog-post -->

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'simplebusiness' ); ?></p>
            <?php endif; ?>

        </div><!-- /.blog-main -->

       

    </div><!-- /.row -->

</main><!-- /.container -->




<?php get_footer(); ?>        