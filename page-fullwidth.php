<?php
/*
 Template Name: Fullwidth Template
*/
get_header();

?>
<!--hero section 
    ======================-->
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
      " data-type="background" data-speed="2" style="  background: #fff url('<?php the_post_thumbnail_url() ?>') center center/cover no-repeat; height: 70vh;">
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
        <div class="col-sm-12" id="contact">
            <section class="main-content">
                <p class="text-center"><?php the_content(); ?></p>
            </section>
        </div>
    </div>
</div>


<?php
get_footer();
