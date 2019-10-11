<?php get_header();?>

<h1><?php bloginfo('name');?> </h1>

<section>
  <aside><?php get_sidebar();?></aside>
</section>

<!-- The loop -->
<?php while(have_posts()):
        the_post();?>
  <article>
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <div><?php the_content();?></div>
        <p> Publié le <?php the_time();?> par <?php the_author_posts_link();?></p>
        <div><p> Cet article a <?php comments_number('aucun commentaire', 'un commentaire', '% commentaires');?></p>
  </article>

<?php endwhile;?> <!-- équiavalent à l'accolade-->


<?php get_footer();?>
