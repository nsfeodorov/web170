
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
   
   <!--Mike's title tag code-->
  <title><?php get_my_title_tag(); ?></title>
  
  <!--put in Mike's meta code to enable excerpts for pages-->
  <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
   
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
  
<!--put FontAwsome back in once I figure out the problem-->
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 
<!--WordPress head-->
      <?php wp_head(); ?>

    
</head>

<body <?php body_class(); ?>>
        
 <div id="header">
    
 <h1 class="john" style="display: inline-block"> <a href="http://www.nicolefeodorov.com/scc/web170/wordpress">John Feodorov</a></h1>
 
 <img id="toggle" src="php bloginfo('template_directory'); ?>/images/toggle-icon.png" width="25" height="25" alt="Toggle Menu">
 
 <!--begin navigation--> 
 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation', ) ); ?>
 <!--end navigation--> 
       
     </div> <!--end header-->     
   
  <div id="middle">