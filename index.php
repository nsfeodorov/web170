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
    
 <h1 class="john" style="display: inline-block"> <a href="#">John Feodorov</a></h1>
 
 <!--begin navigation--> 
 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation', ) ); ?>
 <!--end navigation--> 
       
     </div> <!--end header-->     
   
  <div id="middle">
  
  <div id="content">
   
    
   <!--begin WordPress loop to get page content from page editor--> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start loop ?>

<h2><a href="<?php the_permalink(); // link to the page ?>"><?php the_title(); // get the title ?></a></h2>

<?php the_content(''); // get the content ?>

<?php endwhile; endif; // end the WordPress loop ?>
  
  
      </div> <!--content-->
    
     <div id="sidebar">
      
		  <h3 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); // get the gateway page title ?></h3>

			<ul class="sub-navigation-items"><?php if ($post->post_parent) { // if the page has parent-
	
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // list the sub-pages
			} else { // if the page does not have a parent-
	
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // list the sub-pages (no title)
			} ?></ul>


<?php if (!(is_page())) : // if not in "pages" (in post) ?>

<h3 class="sub-navigation-title">Blog</h3>
<ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => __(''))); // list the categories (no title) ?></ul>

<?php endif; ?>


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
    