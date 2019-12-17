
<?php /* Template Name: article */ ?>
 
<?php get_header(); ?>
 
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">





        <div class="colone">
            <hr width="100%" color="white" size="1">
            <div class="fil">
                <a href="home.php">
                    <p>Home </p>
                </a>
                <p> </p>
                <p>Explore the collection </p>
                <p>> </p>
                <a href="shop.php"><p> Nos articles </p></a>
                <p>> </p>
                <p class="blanc"> Article </p>
            </div>
            <p class="soustitre">Article</p>

            <a href="shop.php" class="retour">< retour à nos articles</a>



 <div class="dodo">

           <section id="post">
            
                        
    <?php 
    $post=get_post($_GET['id']); ?>
  <?php echo $post->post_content;?>


</section> 




</div>


  </main><!-- .site-main -->
 
 
</div><!-- .content-area -->
 

<?php get_footer(); ?>