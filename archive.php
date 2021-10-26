<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>
<section class="
        container-fluid
        feature-image feature-image-default-alt
        d-flex
        justify-content-center
        align-items-center
        text-white
      " data-type="background" data-speed="2">
	<header class="page-header">
		<?php
		the_archive_title('<h1 class="page-title">', '</h1>');
		the_archive_description('<div class="archive-description text-muted small">', '</div>');
		?>
	</header><!-- .page-header -->
</section>

<?php if (have_posts()) : ?>
	<div class="container">
		<div id="primary" class="row pt-4 pb-4">
			<main id="content" class="col-sm-8" role="main">
			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/content', get_post_type());

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
			?>
			</main>
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>


	<?php
	get_footer();
