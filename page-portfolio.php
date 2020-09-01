<?php
/*
Template Name: Modèle de Page Recettes
*/
?>
<?php
get_header()
 ?>

<?php

query_posts(array(
‘post_type’ => ‘recettes’,
‘showposts’ => 10
) );
?>
<?php while (have_posts()) : the_post(); ?>
<div class="recette">
<?php the_post_thumbnail(); ?>
<div class="text">
<h2><b><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></b></h2>
<p><i>Recette proposée par : <?php the_author(); ?></i></p>
<p><?php echo get_the_excerpt(); ?></p>
</div>
</div>
<?php endwhile;?>
<?php
get_footer()
 ?>
