<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"> , </h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php get_the_title(); ?>
		<?php get_post_permalink(); ?>
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->
 