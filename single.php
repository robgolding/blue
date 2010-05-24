<?php get_header(); ?>
	
	<div class="container_12">
		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
				<section class="grid_8 post" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					
					<p class="meta">
						Categories: <?php the_category(', '); ?> | <?php the_tags('Tags: ', ', '); ?> | <?php post_comments_feed_link('RSS 2.0'); ?>
					</p>
				
					<?php comments_template(); ?>
				
				</section>
				
				<section id="sidebar" class="grid_4">
					<?php get_sidebar(); ?>
				</section><!-- /sidebar -->
				
			<?php endwhile; ?>
		<?php else: ?>
			<section class="grid_8">
				<h1>Not Found</h1>
					<p>Sorry, no posts matched your criteria.</p>
			</section>
		<?php endif; ?>
	
	</div><!-- /container_12 -->

<?php get_footer(); ?>
