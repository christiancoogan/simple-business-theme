<?php /* Template Name: Blog Posts Highlights Template */ ?>
<?php get_header(); ?>

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Medical news in your area</h1>
        <h2 class="lead blog-description text-center">Follow us for up to date medical news!</h2>
    </div>
</div>

<main role="main" class="container">

    <div class="row blog">

        <?php
        $args = array(
            'orderby' => 'date',
            'posts_per_page' => 3,
            'category_name' => 'news'
        );
        $recent_posts = new WP_Query( $args );
        ?>
        <?php if ( $recent_posts->have_posts() ) : ?>
        <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
        <div class="col-sm-4 text-center"> 
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a></br>
            <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
        </div><!-- /.cols -->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <div class="col-sm-8 col-sm-offset-2 news-section">
            <p><?php _e( 'No posts have been created yet in the News category.<br>
Add that category and create posts.<br>Be sure to give each post a featured image.', 'simplebusiness'); ?></p>
        </div><!-- /.col -->
        <?php endif; ?>

    </div><!-- /.row -->

</main><!-- /.container -->




<?php get_footer(); ?>        