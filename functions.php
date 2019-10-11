<?php
//génère l'élément title

function genere_title()
{
  add_theme_support('title-tag');

}

  add_action('after_setup_theme','genere_title');

//le get_sidebar

register_sidebar(array(
                 'name'=>'Manu contestuel principal',
                  'id'=> 'sidebar-1',
                  'description' =>'Manu contestuel principal',
                  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                  'after_widget' =>'</aside>',
                  'before_title' => '<h1 class="widget_title">',
                  'after_title' =>'</h1>',
                 ));


//général
register_nav_menus(array('menu-principal'=>'Menu principal',
                          'menu-2'=> 'Menu seondaire',
                        ));

//Style et script
function ajout_styles_et_scripts(){
  wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css');
  wp_enqueue_style('general', get_template_directory_uri().'/css/site.css');
  wp_enqueue_script('mon-js', get_template_directory_uri().'/js/mon-js.js');
}
  add_action('up_enqueue_scripts','ajout_styles_et_scripts');
