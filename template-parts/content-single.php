<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	<i class="fas fa-quote-left"></i>
	<header class="entry-header">
	<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
			<div class="entry-content">
				<?php the_content(); ?>
				<p> This site is heavily inspired by Chris Coyier’s <a href="https://quotesondesign.com/">Quotes on Design.</a> </p>

			</div><!-- .entry-content -->
	<i class="fas fa-quote-right"></i>

	</header><!-- .entry-header -->
</article><!-- #post-## -->
