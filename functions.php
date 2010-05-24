<?php
if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => '</li>',
       'before_title' => '<h2 class="widgettitle">',
       'after_title' => '</h2>',
   ));
}

function exclude_projects_from_rss($query) {
	if ($query->is_feed) {
		$query->set('cat','-27');
	}
	
	return $query;
}

add_filter('pre_get_posts', 'exclude_projects_from_rss');

?>
