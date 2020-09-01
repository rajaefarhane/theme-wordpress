<?php get_header() ?>





<div class="container-fluid">
  <div class="row">
    <div class="titre1">  <h3 class="liste-article">Liste des articles </h3></div>

    <?php

    // checks if there are any posts that match the query
    if (have_posts()) :

      // If there are posts matching the query then start the loop
      while ( have_posts() ) : the_post();

        // the code between the while loop will be repeated for each post
        ?>
<div class="container c">
  <div class="row">

  <div class="titre-article-liste">
      <h2  class="titre1article" id="post-<?php the_ID(); ?>"><a class="info"href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>
  </div>
  <div class="image-article">
  <div class="im"><?php the_post_thumbnail(); ?></div>
  </div>
  <div class="extrait-article">
  <p class="extrait">  <?php the_excerpt(); ?></p>
  <p class="postmetadata">Categorie: <?php the_category(); ?> </p>
  <?php //the_excerpt(); ?>
  </div>


<div class="svg-wrapper">
  <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
    <rect class="shape" height="60" width="320" />
    <div class="text"><a class="infoarticle1" href="<?php the_permalink() ?>" rel="bookmark" >afficher plus</a></div>
  </svg>
</div>




  </div>
</div>



        <?php



    // Stop the loop when all posts are displayed
 endwhile;

// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>

</div>

</div>
<?php get_footer() ?>
