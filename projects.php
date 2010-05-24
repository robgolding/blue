<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>
	
	<div class="container_12">
		<section class="grid_12">
			<h1>Projects</h1>
		</section>
		<?php wp_reset_query(); query_posts('cat=27'); wp_reset_query(); ?>
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
				<section class="grid_6">
					<?php the_content(''); ?>
				</section>
			<?php endwhile; ?>
		
		<?php endif; ?>
	</div><!-- /container_12 -->

<?php get_footer(); ?>
