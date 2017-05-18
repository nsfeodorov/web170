
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
   
  <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?>
 | Seattle, WA</title>
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
  
<!--put FontAwsome back in once I figure out the problem-->
 
<!--WordPress head-->
      <?php wp_head(); ?>

    
</head>

<body <?php body_class(); ?>>
        
 <div id="header">
    
 <h1 class="john" style="display: inline-block"> <a href="http://www.nicolefeodorov.com/scc/web170/wordpress">John Feodorov</a></h1>
 
 <!--begin navigation--> 
 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation', ) ); ?>
 <!--end navigation--> 
       
     </div> <!--end header-->     
   
  <div id="middle">