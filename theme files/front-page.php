<!DOCTYPE html>
<html>
<head>
  
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
	

  
  <!--start image slider-->
   
  <div class="image-slider">
   
  <img class="mySlides w3-animate-fading" src="http://www.nicolefeodorov.com/scc/web170/templates/images/orange.jpg" style="width:100%">
  
  <img class="mySlides w3-animate-fading" src="http://www.nicolefeodorov.com/scc/web170/templates/images/purple.jpg" style="width:100%">
  
  <img class="mySlides w3-animate-fading" src="http://www.nicolefeodorov.com/scc/web170/templates/images/green.jpg" style="width:100%">

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
   
  
 <div id="content">
        
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
	</div> <!---content--->
    
    
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
   
<!--WP footer-->
   <?php wp_footer(); ?>
    
    </body>
</html>
    