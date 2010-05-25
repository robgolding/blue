<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
				$post_obj = $wp_query->get_queried_object();
				$slug = $post_obj->post_name;
				if ($slug == "home" || $slug == "cv" || $slug == "projects")
				{
					$page_id = $slug;
				}
				else
				{
					$page_id = "blog";
				}
			?>
			<?php if (is_home() || $page_id == "home") { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?>
		</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />

		<meta name="Author" content="Rob Golding" />
		<meta name="Copyright" content="Copyright (c) 2010 Rob Golding" />

		<meta name="Description" content="" />
		<meta name="Keywords" content="" />

		<meta name="Robots" content="all" />
		<meta http-equiv="imagetoolbar" content="false" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		 
		<meta name="keywords" content="rob, golding, blog, technology, windows, server, linux, networking, vmware, active, directory, active directory, windows server, programming, university, computer science, nottingham, england, nottingham university, linux, python, django" />
		
		<link rel="canonical" href="http://www.robgolding.com/" />
		
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php wp_head(); ?>
		
	</head>
	
	<body id="<?php echo $page_id; ?>">
		<div id="wrap">
			<div id="masthead_wrap">
				<header id="masthead">
					<h1><a href="/">Rob Golding</a></h1>
					<nav class="clearfix" id="nav_primary">
						<ul class="nav">
							<li id="nav_cv"><a href="/cv/"><h2>CV</h2><h3>my r&eacute;sum&eacute;</h3></a></li>
							<li id="nav_projects"><a href="/projects/"><h2>Projects</h2><h3>in my spare time</h3></a></li>
							<li id="nav_blog"><a href="/blog/"><h2>Blog</h2><h3>technical writings</h3></a></li>
							<li id="nav_contact"><div id="nav_contact_nojava"><h2><a>Contact</h2><h3 class="error">javascript required</h3></a></div>
								<script language="JavaScript" type="text/JavaScript">
									var noJava=eval('document.getElementById(\'nav_contact_nojava\')')
									noJava.style.display = 'none';
								</script>
								<script type="text/javascript">
									//<![CDATA[
									<!--
									var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
									"=107){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return " +
									"o.substr(0,ol);}f(\")34,\\\".$(;3.n!128b&4oepkw\\\"\\\\oi^t\\\\130\\\\430\\" +
									"\\DJ020\\\\KHG430\\\\\\\\\\\\N500\\\\320\\\\610\\\\230\\\\300\\\\300\\\\(T[" +
									"000\\\\[XG8610\\\\r\\\\200\\\\N804875>:8$520\\\\ 03%> -w#?& )*d130\\\\y%'3(" +
									"730\\\\_100\\\\630\\\\320\\\\TU]C_GC530\\\\F_UB[NCO\\\"(f};o nruter};))++y(" +
									"^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y{)++i;l<i;0=i(rof;htgnel.x=l," +
									"\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"                                         ;
									while(x=eval(x));
									//-->
									//]]>
								</script>
							</li>
						</ul>
					</nav>
					<span>Technology Consultant</span>
				</header>
			</div><!-- /masthead_wrap -->
		
		<div id="main">	
