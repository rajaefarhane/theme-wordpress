<?php
get_header()
 ?>
<div class="container-fluid premier-page">
  <div class="row">



        <?php query_posts('showposts=4&cat='.$cat->cat_ID);?>
<?php //dynamic_sidebar('home-sidebar'); ?>


<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<div class="col-lg-6 dernier-articles">
    <div class="titacc">  <h1 ><a href="<?php the_permalink() ?>">  <?php the_title(); ?></a> </h1></div><br><br>
  <div class="imarac"><?php echo the_post_thumbnail(); ?></div><br>






  </div>
  <?php endwhile; endif; ?>












    </div>
  </div>
</div>



 <!-- <div class="container">
     <div class="row">
         <div class="col-md-8">
             <?php
                 // query_posts('offset=1');
                 // get_template_part('loop');
             ?>
         </div>
         <div class="col-md-4">
            <?php //dynamic_sidebar('main-sidebar'); ?>
         </div>
     </div>
 </div> -->
 <div class="fot">
<?php
get_footer()
 ?>
</div>
