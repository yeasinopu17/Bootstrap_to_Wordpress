<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>
<!-- Boost your income 
======================-->
<section id="boost-income">
    <div class="container">
        <div class="section-header">

            <!-- check if image exits -->
            <?php if (!empty($args['income_feature_img'])) : ?>
                <img src="<?php echo $args['income_feature_img']['url'] ?>" alt="<?php echo $args['income_feature_img']['alt'] ?>" />
            <?php endif; ?>
            <h2><?php echo $args['income_section_title']; ?></h2>
        </div>
        <p class="lead text-center">
            <?php echo $args['income_section_description']; ?>
        </p>
        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo $args['income_section_r1_title']; ?></h3>
                <p><?php echo $args['income_section_r1_des']; ?></p>
            </div>
            <div class="col-sm-6">
                <h3><?php echo $args['income_section_r2_title']; ?></h3>
                <p><?php echo $args['income_section_r2_des']; ?></p>
            </div>
        </div>
    </div>
</section>