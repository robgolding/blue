<?php get_header(); ?>
	
	<h2>Search Results</h2>
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<p class="meta"><?php the_time('l, F jS, Y') ?></p>
				<p class="meta"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<p><?php next_post_link('&laquo; Older Entries') ?> <?php previous_post_link('Newer Entries &raquo;') ?></p>

	<?php else : ?>
		<div class="post">
			<p>No posts found. Try a different search?</p>
		</div>
		
	<?php endif; ?>

</div><!-- /content-inner -->

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- /sidebar -->
	

</div><!-- /content -->
</div><!-- /wrap-inner -->
</div><!-- /wrap -->

<?php get_footer(); ?>
