<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>
	
	<div class="container_12">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<section class="grid_12">
					<h1><?php the_title(); ?></h1>
					<?php the_content(''); ?>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php query_posts('cat=27'); ?>
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
				<section class="grid_6">
					<h2><?php the_title(); ?></h2>
					<?php the_content(''); ?>
				</section>
			<?php endwhile; ?>
		
		<?php endif; ?>
	</div><!-- /container_12 -->

<?php get_footer(); ?>
