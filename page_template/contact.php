<?php /* Template Name: contact */ ?>
 
<?php get_header(); ?>
 
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<p class="soustitre"> <?php the_title();?> </p>

<div class='bgblanc'>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<p><?php the_content(); ?> </p> <?php
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

</div>
</main>
</div>

<?php get_footer(); ?>


