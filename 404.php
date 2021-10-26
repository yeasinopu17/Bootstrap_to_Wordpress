<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>
<section class="
        container-fluid
        feature-image
        d-flex
        justify-content-center
        align-items-center
        text-white " data-type="background" data-speed="2" style="height: 70vh;">
	<h1 class="page-title wow animate__zoomInDown" data-wow-duration="1.5s"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'bootstrap2wordpress'); ?></h1>
</section>
<div class="container">
	<div class="row pt-3" id="primary">
		<main id="content" class="col-sm-8">
			<div class="error-404 not-found">
				<div class="page-content">
					<h2>Don't fret ! Let's get back on track</h2>
					<h3>Resourses</h3>
					<p class="lead">Are you looking for specific resources ?</p>

					<!-- resources section 
					======================-->
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
							while ($resources->have_posts()) : $resources->the_post();
								$resource_acf = get_fields(get_the_ID());
								$resource_acf['element'] = 'excerpt';

								get_template_part('template-parts/content', 'resources', $resource_acf);

							endwhile;
							wp_reset_postdata(); ?>
						</div>
					</div>

					<!-- category 
					======================-->

					<div class="widget widget_categories bg-white mt-2 rounded-3 p-3">
						<h2 class="text-center">categories</h2>
						<p class="lead border-bottom text-center">Our popular categories...</p>
						<ul class="">
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>


					</div>
				</div>
			</div>
		</main>
		<!-- side bar 
        ======================-->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>
<?php
get_footer();
