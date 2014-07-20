<?php
/**
 * Template Name: Home Page with Slide
 * @package Madanlal Goenka Charitable Trust
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!-- custom data -->
		
		<?php
			$args = array('cat' => 2);
			$category_posts = new WP_Query($args);

            if($category_posts->have_posts()) :
				while($category_posts->have_posts()) :
						$category_posts->the_post();        
		 ?>        
			 <article>
			 <h1>
			 	<a href="<?php the_permalink(); ?>">
			 		<?php the_title() ?>
			 	</a>
			 </h1>
			 <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail('single-post-thumbnail');
} 
?>
			 <?php the_excerpt(); ?>
			 <a class="readmore" href="<?php the_permalink() ?>">Read More..</a>
		</article>

		<?php
			endwhile;

		else:
		?>
		OOps, ther are no posts.


		<?php
			endif;
		?>
		

		<!-- custom data end -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
