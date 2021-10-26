<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post bg-white mb-3 rounded-3'); ?>>
	<header class="entry-header p-4">
		<?php
		if (is_singular()) :
			the_title('<h3 class="entry-title mb-3 pb-3 border-bottom">', '</h3>');
		else :
			the_title('<h3 class="entry-title mb-3 pb-3 border-bottom"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
		endif;

		if ('post' === get_post_type()) : ?>
			<div class="post-details ">
				<i class="fa fa-user"></i> <?php the_author(); ?><i class="far fa-clock"></i>
				<time><?php the_date(); ?></time>
				<i class="fa fa-folder"></i> <?php the_category(', '); ?>
				<?php the_tags('<i class="fa fa-tags"></i> Tagged ', ', ', ''); ?>
			</div>
			<div class="post-comments-badge">
				<a class="text-decoration-none" href="<?php comment_link(); ?>"><i class="fa fa-comments fa-1x mb-2"></i> <?php comments_number(0, 1, '%'); ?></a>
			</div>
			<?php edit_post_link(' Edit', '<div class="mt-4" style="color: #d95131"> <i class="fas fa-edit" ></i>', '</div>'); ?>

		<?php endif; ?>
	</header>
	
	<?php if (has_post_thumbnail()) : ?>
		<div class="post-image px-4 pb-4">
			<?php the_post_thumbnail(array('auto',500)); ?>
		</div>
	<?php endif; ?>

	<div class="post-excerpt px-4 pb-3">
		<?php the_excerpt();?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->