<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>

<!-- hero section 
======================-->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-badge.png" alt="Bootstrp to Wp" />
                </div>
                <div class="col-md-7 hero-text">
                    <h1 class="wow animate__zoomInDown" data-wow-duration="1.5s"><?php bloginfo('name') ?></h1>
                    <p class="lead">
                        <?php esc_html(bloginfo('description')); ?>
                    </p>
                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-Lunch Price <small>End Soon</small></h4>
                            <span><?php echo $args['prelaunch_price']; ?></span>
                        </div>
                        <div class="price">
                            <h4>Lunch Price <small>Coming Soon</small></h4>
                            <span><?php echo $args['launch_price']; ?></span>
                        </div>
                        <div class="price">
                            <h4>Final Price <small>Coming Soon</small></h4>
                            <span><?php echo $args['final_price']; ?></span>
                        </div>
                        <p class="wow animate__heartBeat mt-5" data-wow-duration="2s" data-wow-iteration="5">
                            <a class="btn btn-lg btn-danger" href="<?php echo $args['course_url']; ?>" role="button" target="_blank"><?php echo $args['button_text']; ?> <i class="fas fa-arrow-circle-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>