<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>

<!--hero section 
======================-->
<section class="
        container-fluid
        feature-image feature-image-default-alt
        d-flex
        justify-content-center
        align-items-center
        text-white
      " data-type="background" data-speed="2">
	<h1 class="page-title">Blog</h1>
</section>


<!-- blog section 
    ======================-->
<div class="container">
	<div id="primary" class="row pt-4 pb-4">
		<main id="content" class="col-sm-8" role="main">
			<?php
			if (have_posts()) :

				if (is_home() && !is_front_page()) :
			?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
			<?php
				endif;

				/* Start the Loop */
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>
		</main>
		<!-- side bar 
        ======================-->
		<aside class="col-sm-4">
			<?php get_sidebar( ); ?>
		</aside>
	</div>
</div>
<?php

get_footer();
