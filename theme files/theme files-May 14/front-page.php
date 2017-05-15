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

<body>
       
<!--begin navigation--> 
 
 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>

           
<!-- <div id="navigation">
    <ul id="nav-items">
		<li class="john"><a href="../johnfeodorv-April2017/templates/index">John Feodorov</a></li>     
		<li><a href="../johnfeodorv-April2017/templates/index">Contact</a></li>
		<li><a href="../johnfeodorv-April2017/templates/index">Blog</a></li>
		<li><a href="../johnfeodorv-April2017/templates/index">Projects</a></li>
		<li><a href="../johnfeodorv-April2017/templates/index">About</a></li>	
		
	 </ul>
    
	</div><!--end navigation--> 

  
  <!--start image slider-->
   
  <div class="image-slider">
   
  <img class="mySlides w3-animate-fading" src="../johnfeodorv-April2017/templates/images/orange.jpg" style="width:100%" alt="placeholder image">
  
  <img class="mySlides w3-animate-fading" src="../johnfeodorv-April2017/templates/images/purple.jpg" style="width:100%" alt="placeholder image">
  
  <img class="mySlides w3-animate-fading" src="../johnfeodorv-April2017/templates/images/green.jpg" style="width:100%" alt="placeholder image">

</div>
   
  <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000); // Change image every 2 seconds
}
</script><!--end image slider-->
   
  
 <div id="home-content">
        
    <section class="introduction">
    
       <h2 class="intro-h2">Hi,</h2>
       
       <p class="synopsis">Synopsis here. Nulla tempus turpis non nunc pulvinar egestas. Aenean accumsan tellus nec molestie varius. Praesent ac hendrerit tortor. Nunc bibendum sem nec magna faucibus, quis lacinia metus dignissim. Nullam aliquam aliquet mollis. Nullam sagittis interdum orci, ultrices scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis. Curabitur pharetra laoreet cursus.</p>    
	
	</section> <!--introduction-->
  
   <section class="gallery">
   	
  <div class="list-projects">
  <img src="http://loremflickr.com/320/240" alt="place holder photo" />
	  <p>1 scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis.</p></div>
  
   <div class="list-projects">
  <img src="http://loremflickr.com/320/240" alt="place holder photo" />
  <p>2 scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis.</p></div>
  
   <div class="list-projects">
  <img src="http://loremflickr.com/320/240" alt="place holder photo" />
  <p>3 scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis.</p></div>
  
   <div class="list-projects">
  <img src="http://loremflickr.com/320/240" alt="place holder photo" /><p>4 scelerisque diam mattis id. Nunc eget turpis quis mauris elementum iaculis.</p></div>
 
    	
   </section><!--gallery-->
	</div> <!--home-content-->
    
    
    <section class="footer">
    
    <div id="FB">
		<a href="#" class="fa fa-facebook"></a>
    </div><!--FB-->

    <div id="instagram">
		<a href="#" class="fa fa-instagram"></a>
    </div><!--instagram-->
    
    <div id="contactBtn">
		<a href="#" class="fa fa-envelope"></a>
    </div><!--contact-->
	
   </section> <!--footer-->
   

    
    </body>
</html>
    