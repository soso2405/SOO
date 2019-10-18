<?php get_header();?>

<h1><?php bloginfo('name');?> </h1>

<section>
  <aside><?php get_sidebar();?></aside>
</section>

<h1>Page d'Accueil</h1>

<?php the_posts_pagination();?>
<?php get_footer();?>
