<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- List posts -->
		<?php
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'post',
			 );
			 $rands_posts = get_posts( $args ); ?>

			<h2>Quotes Authors</h2>
			<ul>
				<?php foreach ( $rands_posts as $post ) : setup_postdata( $post ); ?>
					<?php get_template_part( 'template-parts/content', 'authors' ); ?>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>

			<?php
			$allpost = get_post('all');
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
