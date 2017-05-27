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
//



?>