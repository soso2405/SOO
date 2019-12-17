<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>vag</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/monSite/css/reset.css" />
    <link rel="stylesheet" href="http://localhost/monSite/css/shop.css" />
    <link rel="stylesheet" href="http://localhost/monSite/css/header.css" />
    <link rel="stylesheet" href="http://localhost/monSite/css/footer.css" />
    <link rel="stylesheet" href="http://localhost/monSite/css/principale.responsive.css" />
 <link rel="stylesheet" href="http://localhost/monSite/css/hamb.css" />
 <style type="text/css">
 	.gras{
 		text-align: center;
 	}
 	.ligne p{
 		text-align: center;
 	}


 </style>
</head>



       <?php get_header();?>

        <div class="colone">
            <hr width="100%" color="white" size="1">
            <div class="fil">
                <a href="http://localhost/monSite/home.php">
                    <p>Home </p>
                </a>
                <p> </p>
                <p>Explore the collection </p>
                <p>> </p>
                <p class="blanc"> Nos articles </p>
            </div>
            <p class="soustitre">Nos articles</p>
<div class="dodo">
            <div class="rangementcase">
<div class="ligne">
<!-- The loop -->
<?php if(have_posts()): while(have_posts()):
        the_post();?>
 
         <div class="grandecase">
                       <a href="http://localhost/monSite/article.php?id=<?php echo $id?>">
                       <?php the_content();?>
                        <p><?php the_title();?></p>
                    </a>
                    </div>
                    




<?php endwhile; else:?> <!-- équiavalent à l'accolade-->
      <p> Désolé nous ne proposons pas ce type d'articles. </p>
    <?php endif;?>

</div>

                
            </div>

<?php get_footer();?>


