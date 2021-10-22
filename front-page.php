<?php
/*
 Template Name: Fontpage
*/
get_header();

$price = get_fields();
// echo esc_html(var_dump($price));
// echo esc_html( '<i class="fas fa-laptop fa-4x"></i>' );
?>

<!-- hero section 
======================-->
<?php get_template_part('template-parts/content', 'hero', $price); ?>

<!-- OPT in section 
======================-->
<?php get_template_part('template-parts/content', 'optin', $price); ?>

<!-- Boost your income 
======================-->
<?php get_template_part('template-parts/content', 'boost-income', $price); ?>

<!-- Who Benefits 
======================-->
<?php get_template_part('template-parts/content', 'who-benefits', $price); ?>

<!-- Course feature 
======================-->
<?php get_template_part('template-parts/content', 'course-features', $price); ?>

<!-- Project Feature  
======================-->
<?php get_template_part('template-parts/content', 'project-features', $price); ?>


<!--  Video feature
======================-->
<?php get_template_part('template-parts/content', 'video-featurette'); ?>

<!--  Instructor
======================-->
<?php get_template_part('template-parts/content', 'instructor',$price); ?>

<!--  Testimonials
======================-->
<?php get_template_part('template-parts/content', 'testimonial',$price); ?>

<?php
// get_sidebar();
get_footer();
