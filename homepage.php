<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
			
			<div class="container_12 clearfix">
				<section id="home_about_me" class="grid_6 home_section">
					<h1>About Me</h1>
					<p>
						My name is Rob Golding, I'm a second year Computer Science student at the <a href="http://cs.nott.ac.uk" title="University of Nottingham, Computer Science">University of Nottigham</a>, England.
					</p>
					<p>
						In my spare time I like programming in Python, and writing web applications (mostly using the <a href="http://www.djangoproject.org" title="Django Project">Django</a> web framework).
					</p>
				</section>
			
				<section id="home_work" class="grid_6 home_section">
					<h1>Work</h1>
					<p>
						I'm experienced in installing and configuring networks for small-medium businesses, or home offices. I also create websites, though I mostly write sites that serve a purpose as an application (like booking systems, for example).
					</p>
					<p><a href="/cv/">Read my CV &rarr;</a></p>
				</section>
			
				<section id="home_projects" class="grid_6 home_section">
					<h1>Projects</h1>
					<p>
						I'm usually working on multiple projects at once, and I have recently started using <a href="http://bitbucket.org/robgolding63/" title="BitBucket">bitbucket</a> to host the public ones.
					</p>
					<p>
						My latest venture is a portal-style university information management system designed to replace the likes of WebCT, called <a title="MyUni" href="http://bitbucket.org/robgolding63/myuni/" target="_blank">MyUni</a>. I'm working on it with <a title="Robert S. K. Miles" href="http://robertskmiles.com/">Rob Miles</a>, <a title="Marcus Whybrow" href="http://marcuswhybrow.net/">Marcus Whybrow</a>, and <a href="http://benjenkinson.com/">Ben Jenkinson</a>, three good friends studying Computer Science with me at university.
					</p>
				</section>
			
				<section id="home_blog" class="grid_6 home_section">
					<h1>Blog</h1>
					<p>
						I post relatively frequent updates to my blog, which has evolved with my technical interest since I started writing for it in 2007.
					</p>
					<p>	
						At present, I write mostly about Django, and other aspects developing web applications with modern techniques.
					</p>
					<p><a href="/blog/">Visit my blog &rarr;</a></p>
				</section>
			</div> <!-- /container_12 -->
		
			<div id="elsewhere" class="container_12 clearfix">
				<section class="grid_6 title">
					Find me elsewhere...
				</section>
				<section class="grid_6 links">
					<p>
						<ul>
							<li class="lastfm"><a href="http://www.last.fm/user/robgolding63/" title="Music on last.fm">last.fm</a></li>
							<li class="facebook"><a href="http://www.facebook.com/robgolding63/" title="Facebook">Facebook</a></li>
							<li class="flickr"><a href="http://flickr.com/photos/robgolding63/" title="Photos on Flickr">Flickr</a></li>
							<li class="linkedin"><a href="http://uk.linkedin.com/in/robgolding/" title="LinkedIn">LinkedIn</a></li>
							<li class="twitter"><a href="http://www.twitter.com/robgolding63/" title="Twitter">Twitter</a></li>
							<li class="github"><a href="http://github.com/robgolding63/" title="Github">Github</a></li>
							<li class="bitbucket"><a href="http://bitbucket.org/robgolding63/" title="BitBucket">BitBucket</a></li>
						</ul>
					</p>
				</section>
			</div> <!-- /elsewhere -->
			
		<?php endwhile; ?>
		
	<?php endif; ?>
	
</div><!-- /content-inner -->
</div><!-- /content -->
</div><!-- /wrap-inner -->
</div><!-- /wrap -->

<?php get_footer(); ?>
