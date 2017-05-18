<?php get_header(); ?>
  
  <div id="content">
   
    
   <!--begin WordPress loop to get page content from page editor--> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start loop ?>

<article id="post"-<?php the_ID(); ?> class="post">

<h2><?php the_title(); // get the title ?></h2>


<p><small>Posted on <?php the_time('F j, Y'); //get the post time ?> by <?php the_author(); //get the author ?> in <?php the_category(', '); //include the categories ?> </small></p>


 <?php the_post_thumbnail( 'large' ); //get the featured image ?>
 

<?php the_content(''); // get the content ?>

<?php endwhile; endif; // end the WordPress loop ?>
 
	  </article>
  
	  <small>single.php</small>
  
      </div> <!--content-->
    
     <?php get_sidebar(); ?>
   
	
	<?php get_footer(); ?>