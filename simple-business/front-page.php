<?php get_header(); ?>

        <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 content-padding">
                        <h1>Intro Heading</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum est sapien, vel ultrices ex accumsan sit amet. Nam luctus dolor et pulvinar feugiat. Aliquam eget tincidunt purus. Vivamus pellentesque tincidunt cursus. Donec sed velit non massa tincidunt cursus. Nullam id cursus tortor, eget eleifend massa.</p>
                    </div><!-- Close content-padding-->
                    <div class="col-sm-3 col-sm-offset-2 content-padding text-center" >
                        <h1>Check out our news feed!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum est sapien, vel ultrices ex accumsan sit amet.</p>
                        <a class="btn btn-md about-button" href="http://christiancoogan.com/cas211w/project/category/news/">More News</a>
                    </div><!-- Close content-padding-->
                </div><!-- Close Row -->
            </div><!-- Close Container -->
        </section><!-- Close Section -->

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 content-padding">
                        <h1>Setup an appointment now!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum est sapien, vel ultrices ex accumsan sit amet.</p>
                        <a class="btn btn-lg btn-block" href="contact.html">Contact us!</a>
                    </div><!-- Close content-padding-->
                    <div class="col-sm-6 content-padding" >
                        <div class="info">
                            <h1>Hours and Info</h1>
                            <ul>
                                <li>19000 SW 44th Ave, Portland, OR</li>
                                <li>8am-5pm M-F</li>
                                <li>9am-1pm Saturdays</li>
                                <li>555-777-8888</li>
                            </ul>
                        </div>
                    </div><!-- Close content-padding-->
                    <div class="col-sm-3 content-padding" >
                        <a href="<?php echo esc_url(get_template_directory_uri()); ?>/about/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/doctor.png" class="img-circle"></a>
                        <h1>Dr. GoodDoctor</h1>
                    </div><!-- Close content-padding-->
                </div><!-- Close Row -->
            </div><!-- Close Container -->
        </main><!-- Close Main -->
        
<?php get_footer(); ?>        