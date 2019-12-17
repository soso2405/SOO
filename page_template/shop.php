

<?php /* Template Name: shop */ ?>
 
<?php get_header(); ?>
 
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


      
 <div class="colone">
            <hr width="100%" color="white" size="1">
            <div class="fil">
                <a href="<?php echo get_site_url(); ?>">
                    <p>Home </p>
                </a>
                <p> </p>
                <p>Explore the collection </p>
                <p>> </p>
                <p class="blanc"> Nos articles </p>
            </div>
            <p class="soustitre">Nos articles</p>


<form method="post" action="#iddetonform" id='formulaire'>
   
<select name="site">
  
    <option value="-1">voir toute la collection</option>
    <option value="3">manteau</option>
    <option value="4">tops</option>
 
</select>

    <input type="submit" value="chercher" class="boutton">
</form>




<?php
if (isset($_POST['site']))
{
    $category = $_POST['site'];
}
?>


        </div>
        <div class="dodo">
            <div class="rangementcase">
                <div class="ligne">
                       <?php
                       $args = array(
    'posts_per_page'   => -1,
    'category'         => $category,
    'orderby'          => 'name',
    'order'            => 'ASC',
);

       $posts=get_posts($args);
       $i=1;
       foreach ($posts as $post ):  setup_postdata($post);
        ?>
       
                      <div class="grandecase">
                       <a href="<?php echo get_site_url(); ?>/<?php echo $id?>">
                       <?php the_content();?>
                        <p><?php the_title();?></p>
                    </a>
                    </div>
                    
       <?php
       if ($i%3==0) {
        echo '</div><div class="ligne">';
       }
        $i++; endforeach;?>



                <div class="ligne none">
                    <div class="grandecase">
                        <div class="gre"><img class="sac bli" src="images/sachover.png"><img class="sac" src="images/sac.png"></div>
                        <p class="gras">CONTON & LEATHER</p>
                        <p>Duo geometric</p>
                    </div>
                    <div class="grandecase">
                        <div class="gre"><img class="sac bli" src="images/sachover.png"><img class="sac" src="images/sac.png"></div>
                        <p class="gras">COTON & LEATHER</p>
                        <p>Bohemian Summer</p>
                    </div>
                </div>
            </div>
    </main><!-- .site-main -->
 
 
</div><!-- .content-area -->
 

<?php get_footer(); ?>


