<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
  
  <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> | Seattle, WA
</title>
   
   <!--meta info-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--style info-->
  <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 <!-- WP head--> 
 <?php wp_head(); ?> 
 
</head>

<body <?php body_class(); ?>>
        
       
 <div class="navigation">
 
    
	<h1 id="john">John Feodorov</h1>
     
	 <div id="home"><a href="index">Home</a></div>
	 <div id="about"><a href="about">About</a></div>
	 <div id="projects"><a href="projects">Projects</a></div>
	 <div id="contact"><a href="contact">Contact</a></div>
    
	</div><!--navigation-->
   
  
   <div id="content">
  
   
   <h2 class="content-txt">Current projects</h2>
       
   <p class="content-txt">Synopsis here. Nulla tempus turpis non nunc pulvinar egestas. Aenean accumsan tellus nec molestie varius. Praesent ac hendrerit tortor. </p>    
   	
  <div class="proj">
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // starts the loop ?>
	  
	  <h3><a href="<?php the_permalink(); //links to page or post ?>"><?php the_title(); //gets the title ?></a></h3>
	  
	  <?php the_content(''); //get the page or post written content ?>
	  <?php endwhile; endif; //ends to loop ?>
	  
  
	   </div><!--projects-->
 
     
      </div> <!--content-->
    
    <section class="footer">
    
		<div id="FB"><a href="#" class="fa fa-facebook"></a>
    </div><!--FB-->

    <div id="instagram">
		<a href="#" class="fa fa-instagram"></a>
    </div><!--instagram-->
    
    <div id="contactBtn">
		<a href="#" class="fa fa-envelope"></a>
    </div><!--contact-->
	
   </section> <!--footer-->
   
   
<!--WP footer-->
   <?php wp_footer(); ?>

    
    </body>
</html>
    