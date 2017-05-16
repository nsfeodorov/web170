

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