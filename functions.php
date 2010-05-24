<?php
if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => '</li>',
       'before_title' => '<h2 class="widgettitle">',
       'after_title' => '</h2>',
   ));
}

function exclude_projects($query) {
	if ($query->is_feed || $query->is_home || $query->is_archive) {
		if ($query->query_vars['cat'] != '27')
			$query->set('cat','-27');
	}
	
	return $query;
}

add_filter('pre_get_posts', 'exclude_projects');

?>
