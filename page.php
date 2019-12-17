<body class="nature">
    

    <div id="wrap">
<?php get_header();?>
<style type="text/css">
    .rangementcase p {
    	margin-bottom: 20px;
    }
    p.contact{
        margin-top: 30px;
        font-weight: 400;

    }
    article h2 {
    	font-weight: 400;
    	font-size: 25px;
    	margin: 0 0 60 0;
    }
    .rangementcase {
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	padding:80px 0;
    	background-color: white;
    }

 </style>

<div class="rangementcase">
<!-- The loop -->
<?php while(have_posts()):
        the_post();?>
  <article>
        <h2><?php the_title();?></h2>
        <div><?php the_content();?></div>
      
  </article>

<?php endwhile;?> <!-- équiavalent à l'accolade-->

</div>

<?php get_footer();?>
</div>