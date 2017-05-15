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
        
 <!--begin navigation--> 
 
 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation', ) ); ?>

           
<!-- <div id="navigation">
    <ul id="nav-items">
		<li class="john"><a href="../johnfeodorv-April2017/templates/index">John Feodorov</a></li>     
		<li><a href="../johnfeodorv-April2017/templates/index">Contact</a></li>
		<li><a href="../johnfeodorv-April2017/templates/index">Blog</a></li>
		<li><a href="../johnfeodorv-April2017/templates/index">Projects</a></li>
		<li><a href="../johnfeodorv-April2017/templates/index">About</a></li>	
		
	 </ul>
    
	</div><!--end navigation-->
   
  <div id="middle">
  
  <div id="content">
   
  
  <!-- replace this with the WordPress loop to pull content from the text editor-- 
   <h2 class="content-txt">Current projects</h2>
       
   <p class="content-txt">Synopsis here. Nulla tempus turpis non nunc pulvinar egestas. Aenean accumsan tellus nec molestie varius. Praesent ac hendrerit tortor. </p>    
   	
  <div class="proj">
  <img src="http://loremflickr.com/320/240" alt="place holder photo" class="proj-img"/>
	  <p class="proj-text">1 scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis.</p></div>
  
   <div class="proj">
  <img src="http://loremflickr.com/320/240" alt="place holder photo" class="proj-img" />
  <p class="proj-text">2 scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis.</p></div>
  
   <div class="proj">
  <img src="http://loremflickr.com/320/240" alt="place holder photo" class="proj-img"/>
  <p class="proj-text">3 scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis.</p></div>
  
   <div class="proj">
  <img src="http://loremflickr.com/320/240" alt="place holder photo" class="proj-img"/>
  <p class="proj-text">4 scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis.</p></div>
 -->
    
   <!--begin WordPress loop to get page content from page editor--> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start loop ?>

<h2><a href="<?php the_permalink(); // link to the page ?>"><?php the_title(); // get the title ?></a></h2>

<?php the_content(''); // get the content ?>

<?php endwhile; endif; // end the WordPress loop ?>
  
  
      </div> <!--content-->
    
     <div id="sidebar">
      
		  <h3>Sidebar stuff goes here</h3>
		  <p>Nulla tempus turpis non nunc pulvinar egestas. Aenean accumsan tellus nec molestie varius. Praesent ac hendrerit tortor.</p>
      
	</div><!--sidebar-->
   
	</div><!--middle-->
    
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

  
   <!--WordPress footer-->   
<?php wp_footer(); ?>

    
    </body>
</html>
    