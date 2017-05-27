

<div id="sidebar">
     
     <!--sub navigation-->
      
	<div id="sub-navigation">
	
	<?php if (is_page()) : // if in pages- ?>
    <h2 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); // get gateway page title ?></h2>
    
    <ul class="sub-navigation-items"><?php 
    
    if ($post->post_parent) { // if page has a parent-
        
        wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // list parent
        
    } else { // if page does not have a parent-
    
        wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // list child
     
    }
    
    ?></ul>
    
    <?php endif; ?>
    
    
    <?php if (!(is_page())) : // if not in pages- ?>
    
    <h2 class="sub-navigation-title">Blog</h2>
    
    <ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => __(''))); // list categories ?></ul>
    
    <?php endif; ?>
    
    </div> <!--end of sub-navigation-->
	
	
	<!-- Quote -->
  <div id="quote">
   
    <?php if (get_post_meta($post->ID, 'Quote', true)) : // if there is a quote go get it ?>
    
    <blockquote class="sidebar">"<?php echo get_post_meta($post->ID, 'Quote', true); // show the quote ?>"</blockquote>
    
    <?php endif; ?> 
    
	</div><!--end of quote loop-->
	
	
	

	</div><!--end sidebar-->