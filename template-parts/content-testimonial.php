<!--  Testimonials
======================-->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center">What poeple say about brad.</h2>

                <!-- testimonial custom query -->
                <?php
                $testimonialsAnimClass = array('animate__lightSpeedInLeft', 'animate__lightSpeedInRight');

                $testimonials = new WP_Query(array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                    'orderby' => 'post_id',
                    'order' => 'ASC'
                ));
                $v_key = 0;
                ?>


                <!-- testimonial loop -->
                <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                    <div class="wow <?php echo $testimonialsAnimClass[$v_key % 2]; ?> row testimonial shadow bg-white p-3 mb-2" data-wow-duration="2s" data-wow-offset="10">
                        <div class="col-sm-4">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail(array(200, 200), array('class' => 'rounded-circle'));
                            }
                            ?>
                        </div>
                        <div class="col-sm-8">
                            <figure>
                                <blockquote class="blockquote">
                                    <p><?php the_content(); ?></p>
                                </blockquote>
                                <figcaption class="blockquote-footer"><cite title="Source Title"><?php the_title(); ?></cite></figcaption>
                            </figure>
                        </div>
                    </div>
                <?php
                    $v_key++;
                endwhile;
                wp_reset_postdata();
                $v_key = 0;
                ?>

            </div>
        </div>
    </div>
</section>