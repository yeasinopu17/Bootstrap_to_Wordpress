<?php
/*
 Template Name: Resources Page
*/
get_header();

// $price = get_fields();
?>

<!--hero section 
======================-->
<?php if (has_post_thumbnail()) : ?>
    <section class="
        container-fluid
        feature-image
        d-flex
        justify-content-center
        align-items-center
        text-white
      " data-type="background" data-speed="2" style="  background: #fff url('<?php the_post_thumbnail_url() ?>') right center/cover no-repeat; height: 80vh;">
        <h1 class="page-title wow animate__zoomInDown" data-wow-duration="1.5s"><?php the_title(); ?></h1>
    </section>

<?php else : ?>
    <section class="
        container-fluid
        feature-image
        d-flex
        justify-content-center
        align-items-center
        text-white
      " data-type="background" data-speed="2">
        <h1 class="page-title wow animate__zoomInDown" data-wow-duration="1.5s"><?php the_title(); ?></h1>
    </section>
<?php endif; ?>


<!-- main content 
    ======================-->

<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                <?php the_content(); ?>

                <hr />

                <div class="resource-row overflow-hidden">
                    <div class="row g-2">

                        <!-- custom query for Resources -->
                        <?php
                        $resources = new WP_Query(array(
                            'post_type' => 'resource',
                            'posts_per_page' => -1,
                            'orderby' => 'post_id',
                            'order' => 'ASC'
                        ));
                        ?>

                        <?php while ($resources->have_posts()) : $resources->the_post();
                            $resource_acf = get_fields(the_ID());
                            // var_dump($resource_acf);
                        ?>
                            <div class="resource col-sm">
                                <div class="p-3 border bg-white border shadow h-100 resource-parent">
                                    <img src="<?php echo $resource_acf['resource_img']['url']; ?>" alt="<?php echo $resource_acf['resource_img']['alt']; ?>" class="img-thumbnail mx-auto d-block wow animate__jackInTheBox" data-wow-duration="1s" data-wow-offset="200" />

                                    <h3><a href="<?php echo $resource_acf['resource_url']; ?>"><?php the_title(); ?></a></h3>

                                    <div class="resource-content pb-4 text-justified mb-2">
                                        <?php the_content(); ?>
                                    </div>

                                    <?php if ($resource_acf['add_button']) : ?>
                                        <a href="<?php echo $resource_acf['resource_url']; ?>" class="btn btn-success resource-btn wow animate__heartBeat mt-5" data-wow-duration="2s" data-wow-iteration="5"><?php echo $resource_acf['button_text'] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
        </div>
        <!-- content -->
    </div>
    <!-- primary -->
</div>
<!-- container -->

<?php
// get_sidebar();
get_footer();
