<?php get_header(); ?>
	
	<div class="container_12">
		<?php if (have_posts()) : ?>
			<section class="grid_8">
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1>Archive for <?php the_time('Y'); ?></h1>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1>Author Archive</h1>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1>Blog Archives</h1>
				<?php } ?>
		
				<?php while (have_posts()) : the_post(); ?>
					<div class="post">
						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<p class="meta"><?php the_time('l, F jS, Y') ?></p>
						<p class="meta"><?php the_tags('Tags: ', ', '); ?> Categories: <?php the_category(', ') ?> | <?php comments_popup_link('No Comments', '1 Comment &rarr;', '% Comments &rarr;'); ?></p>
					</div>
		
				<?php endwhile; ?>
				
				<?php next_posts_link('&larr; Older Entries') ?> <?php previous_posts_link('Newer Entries &rarr;') ?>
			</section>
		<?php else : ?>
			<section class="grid_8">
				<h1>Not Found</h1>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</section>
		<?php endif; ?>
		
		<section id="sidebar" class="grid_4">
			<?php get_sidebar(); ?>
		</section><!-- /sidebar -->
		
	</div><!-- /container_12 -->
	
<?php get_footer(); ?>
