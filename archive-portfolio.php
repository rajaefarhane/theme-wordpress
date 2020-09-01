
<?php
get_header()
 ?>
 <div class="container">

   <h2 class="titrarticle"id="post-<?php the_ID(); ?>"><a  rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

 <div class="titre-article-single">  <?php echo the_post_thumbnail();  /*pour afficher image*/?></div>

 </div>
 <div class="container trai">
   <div class="">
   <p class="postmetadata">Filed in: <?php the_category(); ?> </p>
   </div>
   <?php the_content(); ?>

   <div class="">
     <p class="date-author">creer le : <?php the_date(); ?> par <?php the_author(); ?></p>
   </div>

 </div>



<?php
get_footer()
 ?>
