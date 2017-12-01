<!doctype html>
<html <?php language_attributes(); ?>>
    <head><!-- -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                    </div><!-- Close navbar-header -->
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => false,
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                                   );
                        ?>
                    </div><!-- Close navbar-collapse -->
                </div><!-- Close container -->
            </nav><!-- Close navbar -->
        </header>

        <section  id="hero-image" class="header-image">
            <div class="row header-text">
                <h1>Portland Medical</h1>
                <h2>We care about your care!</h2>
                <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Portland_panorama3.jpg"> 
            </div><!-- Close header-text -->
        </section><!-- Close section -->

        <section id="category">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <?php
                        if(is_tag()) {
                            single_tag_title('Tag: ');
                        }
                        elseif(is_archive()) {
                        ?>
                        <h2>
                            <?php
                            single_term_title('Category: '); 
                            ?>
                        </h2>
                        <?php
                            if( is_month() ) {
                                echo 'Posts from ';
                                single_month_title(' ');
                            }
                        }
                        ?>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /#category -->




        <!-- End Header -->