<?php /* Template Name: Sidebar Content Page Template */ ?>
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
        <div class="col-sm-8 blog-main">

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

        <!-- SIDEBAR SECTION -->
        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <?php get_sidebar(); ?>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->




<?php get_footer(); ?>        