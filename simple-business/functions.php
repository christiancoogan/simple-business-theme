<?php 

//Add theme support below

//Content Width - Add theme support
if ( ! isset( $content_width ) ) {
    $content_width = 1600;
}

//Feed links, title tags - Add theme support
function simplebusiness_setup() {

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 400, 400);

    // Register Custom Navigation Walker 
    require_once('wp_bootstrap_navwalker.php');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'simplebusiness' ),
    ) );
}

add_action('after_setup_theme','simplebusiness_setup');

function simplebusiness_scripts() {

    /* Stylesheets */
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );

    /* Scripts */
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );

    if ( is_singular() ) wp_enqueue_script('comment-reply');
}

add_action('wp_enqueue_scripts','simplebusiness_scripts');

function custom_excerpt_more( $more ) {
    return '';
}

add_filter( 'excerpt_more', 'custom_excerpt_more' );

//Disables website field
function disable_website_field($fields) {
    if(isset($fields['url'])) 
        unset($fields['url']);
    return $fields;

}
add_filter('comment_form_default_fields', 'disable_website_field');

// Moves the Comment textarea to the bottom of the group of Comment Fields
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

// Register Sidebars
function simplebusiness_sidebars() {

    $args = array(
        'id'            => 'main-sidebar',
        'class'         => 'main-sidebar-area',
        'name'          => __( 'Main Sidebar', 'simplebusiness' ),
        'description'   => __( 'The Default Layout Sidebar which appears on archive.php, page.pgp, single.php', 'simplebusiness' ),
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'simplebusiness_sidebars' );




