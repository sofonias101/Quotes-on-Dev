<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
			<div class="entry-content">
				<?php the_content(); ?>
				<p> This site is heavily inspired by Chris Coyier’s <a href="https://quotesondesign.com/">Quotes on Design.</a> </p>

			</div><!-- .entry-content -->

	</header><!-- .entry-header -->
</article><!-- #post-## -->
