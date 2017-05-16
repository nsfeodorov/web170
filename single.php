<?php get_header(); ?>
  
  <div id="content">
   
    
   <!--begin WordPress loop to get page content from page editor--> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start loop ?>

<h2><a href="<?php the_permalink(); // link to the page ?>"><?php the_title(); // get the title ?></a></h2>

<?php the_content(''); // get the content ?>

<?php endwhile; endif; // end the WordPress loop ?>
  
	  <small>single.php</small>
  
      </div> <!--content-->
    
     <?php get_sidebar(); ?>
   
	
	<?php get_footer(); ?>