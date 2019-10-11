<?php if(!function_exists('dynamic_slidebar') || !dynamic_sidebar()) :?>
<div id="sidebar">
  <li class="widget">
    Recherche : <?php get_search_form();?>
  </li>
  <li class="widget"> Archives
          <?php get_calendar();?>
  </li>
  <li class="widget"> Méta
    <ul>
      <?php wp_register();?>
      <li><?php wp_loginout();?><li>
      <?php wp_meta();?>
    </ul>
</li>
</div>
<?php endif;?>
