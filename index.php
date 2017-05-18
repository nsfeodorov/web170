<?php get_header(); ?>
  
  <div id="content">
   
    
   <!--begin WordPress loop to get page content from page editor--> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start loop ?>

		<article id="post"-<?php the_ID(); ?> class="post">
	
			<h2><a href="<?php the_permalink(); // link to the page ?>"><?php the_title(); // get the title ?></a></h2>

			<p><small>Posted on <?php the_time('F j, Y'); //get the post time ?> by <?php the_author(); //get the author ?> in <?php the_category(', '); //include the categories ?> </small></p>
			
			<a href="<?php the_permalink(); //link to the page or post ?>">

			   <?php the_post_thumbnail( 'thumbnail' ); //get the featured image thumbnail?></a>

			<?php the_excerpt(); // get the post excerpt ?> <a href="<?php the_permalink(); //link to the page or post ?>">Read More ></a>

	</article> <!--end post-->
	
	<?php endwhile; endif; // end the WordPress loop ?>
  
	  
	<small>index.php</small>
  
   
   </div> <!--content-->
   
     
     <?php get_sidebar(); ?>
   
   
	
	<?php get_footer(); ?>