
<style type="text/css">
 	label {
 		display: none;
 	}
 	.wp-block-search button, .wp-block-search input{
 		padding: 10px;
 	}
    .rangementcase p {
    	margin: 0;
    	padding-right: 20px;
    	font-size: 20px;
    }

    .rangementcase {
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	padding:80px 0;
         background-color: white;
    
    color: #002456;
    }

    .soustitre {
    color: white;
    font-size: 50px;
    font-weight: 300;
    margin-left: 10%;
    margin-bottom: 30px;
}

.rangementcase {
   
}

 </style>



        <?php get_header();?>




<section >


<!-- The loop -->
<?php while(have_posts()):
        the_post();?>
  <article>
        <p class="soustitre"><?php the_title();?></p>
        <div class="rangementcase">
        <?php the_content();?>
        </div>

  </article>

<?php endwhile;?> <!-- équiavalent à l'accolade-->

</section>






<?php get_footer();?>