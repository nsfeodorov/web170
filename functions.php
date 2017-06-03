<?php 

/*
Theme Name: J.Feodorov
Theme URI: http://wordpress.org/themes/j.feodorov
Author: Nicole Feodorov
Author URI: http://wordpress.org/
Description: This 2017 theme for WordPress is a basic artist portfolio theme designed for J. Feodorov.
Version: 1.0
*/

//register my sidebar--see https://codex.wordpress.org/Function_Reference/register_sidebar

register_sidebar(array(
'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>',
) );


// Register My Menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//

//create post thumbnails
add_theme_support( 'post-thumbnails' );


add_post_type_support( 'page', 'excerpt' );// enable excerpts for pages


//use Mike's 'get the title tag code' 

function get_my_title_tag() {
	
	global $post;  //be sure to include this
	
	if (is_front_page()) { //this if the front page
	bloginfo('description'); //retrieve the site's tagline
	
	} elseif (is_page() || is_single ()) { //this is for the site's pages or postings
	
	the_title(); //retrieve the page of post title
	
	} else { 
	 bloginfo('description'); //retireive the site tagline
	 }
	
	if ( $post->post_parent ) { // for your site's parent pages
	
		echo ' | '; //do this for the separator and include spaces
		echo get_the_title($post->post_parent); //retrieve the parent page title
	}
	
	echo ' | ';
	bloginfo('name'); //retrieve the site name
	echo ' | ';
	echo 'Seattle, WA'; //write in the location
}

?>