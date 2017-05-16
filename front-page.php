<?php get_header(); ?>
  
  <div id="home-content">
  
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
  
 
    
   <!--begin WordPress loop to get page content from page editor--> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start loop ?>

<h2><a href="<?php the_permalink(); // link to the page ?>"><?php the_title(); // get the title ?></a></h2>

<?php the_content(''); // get the content ?>

<?php endwhile; endif; // end the WordPress loop ?>
  
	  
  
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
   
   <small>front-page.php</small>
	
   </div> <!--home-content-->
    
	
	<?php get_footer(); ?>
  
    