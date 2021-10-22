<!-- Course feature 
======================-->
<section id="course-features" class="text-center">
    <div class="container">
        <div class="section-header">

            <!-- check if image exits -->
            <?php if (!empty($args['course_feature_img'])) : ?>
                <img class="wow animate__backInDown" data-wow-duration="1s" data-wow-offset="3" src="<?php echo $args['course_feature_img']['url'] ?>" alt="<?php echo $args['course_feature_img']['alt'] ?>" />
            <?php endif; ?>

            <h2 class="wow animate__backInRight" data-wow-duration="1s" data-wow-offset="3"><?php echo $args['course_feature_title']; ?></h2>

            <?php if (isset($args['course_feature_body'])) : ?>
                <p class="lead mb-5">
                    <?php echo $args['course_feature_body']; ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- custom query for course feature -->
        <?php
        $course_features = new WP_Query(array(
            'post_type' => 'course_feature',
            'posts_per_page' => -1,
            'orderby' => 'post_id',
            'order' => 'ASC'
        ));
        // var_dump($course_features);
        ?>

        <div class="row">
            <?php while ($course_features->have_posts()) : $course_features->the_post(); ?>
                <div class="col-sm-2 mb-5">
                    <?php echo get_field('feature_icon'); ?>
                    <h4 class="mt-4"><?php the_title(); ?></h4>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>