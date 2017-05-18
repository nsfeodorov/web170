<?php 

/*
Theme Name: J.Feodorov
Theme URI: http://wordpress.org/themes/j.feodorov
Author: Nicole Feodorov
Author URI: http://wordpress.org/
Description: This 2017 theme for WordPress is a basic artist portfolio theme designed for J. Feodorov.
Version: 1.0
*/

// Register My Menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//

//create post thumbnails
add_theme_support( 'post-thumbnails' );
//



?>