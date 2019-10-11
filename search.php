<?php get_header();?>

<h1><?php bloginfo('name');?> </h1>

<section>
  <aside><?php get_sidebar();?></aside>
</section>

<!-- The loop -->
<?php if(have_posts()): while(have_posts()):
        the_post();?>
  <article>
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <div><?php the_content();?></div>
  </article>

<?php endwhile; else:?> <!-- équiavalent à l'accolade-->
      <p> Désolé mon gars je n'ai rien trouvé ! </p>
    <?php endif;?>

<?php get_footer();?>
