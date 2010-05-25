<?php get_header(); ?>
	
	<div class="container_12">
		<?php if (have_posts()) : ?>
			
			<section class="grid_8 post">
				<?php while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>">
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<p class="meta"><?php the_time('F jS, Y') ?> by <strong><?php the_author() ?></strong></p>

						<?php the_content('Read the rest of this entry &rarr;'); ?>

						<p><?php comments_popup_link('No Comments', '1 Comment &rarr;', '% Comments &rarr;'); ?></p>
					</div>
				<?php endwhile; ?>
				
				<p>
					<?php next_posts_link('&larr; Older Entries') ?>
					<?php previous_posts_link('Newer Entries &rarr;') ?>
				</p>
			</section>
		<?php else : ?>
			<section class="grid_8">
				<h1>Not Found</h1>
					<p>Sorry, but you are looking for something that isn't here.</p>
					<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			</section>
		<?php endif; ?>
		<section id="sidebar" class="grid_4">
			<?php get_sidebar(); ?>
		</section><!-- /sidebar -->
	</div><!-- /container_12 -->

<?php get_footer(); ?>
