<!-- Project Feature  
======================-->
<section id="project-features " class="text-center">
    <div class="container">
        <div class="section-header">
            <h2><?php echo $args['project_feature_title']; ?></h2>
            <p class="lead"><?php echo $args['project_feature_body']; ?></p>
        </div>
        <div class="row">
            <!-- custom query for project feature -->
            <?php
            $project_features = new WP_Query(array(
                'post_type' => 'project_feature',
                'posts_per_page' => -1,
                'order' => 'ASC'
            ));
            // var_dump($project_features);

            $jsAnimeClass = array('animate__bounceInLeft', 'animate__bounceInUp', 'animate__bounceInRight');
            $v_key = 0;
            ?>

            <?php while ($project_features->have_posts()) : $project_features->the_post(); ?>
                <div class="wow <?php echo sanitize_html_class($jsAnimeClass[$v_key]); ?> col-sm-4 shadow bg-white p-4" data-wow-duration="2s" data-wow-offset="10">

                    <?php has_post_thumbnail() ? the_post_thumbnail() : ''; ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>
            <?php
                $v_key++;
            endwhile;
            $v_key = 0;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>