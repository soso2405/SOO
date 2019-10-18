<?php wp_redirected(site_url());exit;?>

<section id="posts">
	<?php
	   $posts=get-posts();
	   foreach ($posts as $post ):	setup_post data($post);?>
	   	<article>
	   		<h2><?php the_title();?></h2>
	   		<div></div>
	   	</article>
	   <?php endforeach;?>
</section>

	  