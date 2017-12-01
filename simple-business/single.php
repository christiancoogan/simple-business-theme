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

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p class="blog-post-meta"><?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                <p><?php _e('Posted in:','simplebusiness'); ?> <?php the_category(', ');?></p>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <p><?php the_tags();?></p>
                <?php if ( get_the_author_meta( 'description' ) != '' ) : ?>
                <!-- AUTHOR SECTION -->
                <div id="author-meta">
                    <?php if ( function_exists( 'get_avatar' ) ) { echo get_avatar( get_the_author_meta( 'email' ), '80' );} ?>
                    <div class="about-author"><?php _e( 'About', 'simplebusiness' ); ?> <?php the_author_posts_link(); ?></div>
                    <p><?php the_author_meta( 'description' ) ?></p>
                </div><!-- /author-meta -->
                <?php endif; // no description, no author's meta ?>
                <?php 
                if ( comments_open() ) {
                    echo '<p class="postmetadata">';
                    comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
                    echo '</p>';
                }
                ?>

            </article><!-- /.blog-post -->

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'simplebusiness' ); ?></p>
            <?php endif; ?>

            <nav class="blog-pagination">
                <ul>
                    <li><?php previous_post_link('%link', '&larr; Previous post in category', TRUE); ?></li>
                    <li><?php next_post_link( '%link', 'Next post in category &rarr;', TRUE); ?></li>
                </ul>
            </nav>

            <?php comments_template(); ?>
        </div><!-- /.blog-main -->

        <!-- SIDEBAR SECTION -->
        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <?php get_sidebar(); ?>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->




<?php get_footer(); ?>        