<?php 
function blog_sidebar(){
  register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Blog Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
add_action('widgets_init','blog_sidebar');
