<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'bootstrap2wordpress'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->
	</header><!-- .page-header -->
</section>
<div class="container">
	<div id="primary" class="row pt-4 pb-4">
		<main id="content" class="col-sm-8" role="main">
			<?php if (have_posts()) :
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part('template-parts/content', 'search');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>

		</main><!-- #main -->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>
<?php
get_sidebar();
get_footer();
