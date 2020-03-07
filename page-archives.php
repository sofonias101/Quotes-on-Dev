<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
 
		<?php the_title ( '<h1 class="entry-title"> Archives </h1>' ); ?>

		<!-- List posts -->
		<div class="post-archives">
		 <?php
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'post',
			 );
			 $rands_posts = get_posts( $args ); ?>
				
			<h2>Quotes Authors</h2>
			<ul>
				<?php foreach ( $rands_posts as $post ) : setup_postdata( $post ); ?>
					<?php get_template_part( 'template-parts/content', 'archive' ); ?>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>

			<?php
			$allpost = get_post('all');
			?>
		</div>

		<!-- List-categories -->
		<div class="category-archives">

		 <?php 
		 $categories = get_categories();?>
		 <h2>Categories</h2>
		 <ul>
				<?php foreach ( $categories as $category): ?>
					<li>
						<h3 class="list-cat-items" > <a href="<?php echo get_category_link($category) ?>"><?php echo $category->name ?></a> </h3>
						</li>
				<?php endforeach; ?>
		 </ul>

		</div>

		<!-- List tags -->
		<div class="tags-archive">

		<?php
			$tags = get_tags(); ?>
			<h2>Tags</h2>
			<ul>
				<?php foreach ( $tags as $tag): ?>
					<li>
						<a href="<?php echo get_tag_link($tag)?>"><?php echo $tag->name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
