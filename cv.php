<?php
/*
Template Name: CV
*/
?>

<?php get_header(); ?>
	<div class="container_12">
	
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
				<section class="grid_12">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</section>
			<?php endwhile; ?>
		
		<?php endif; ?>
	
	</div><!-- /container_12 -->

<?php get_footer(); ?>
