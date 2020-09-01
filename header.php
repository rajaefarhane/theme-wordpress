<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head() ?>
    <style>
    .hed{
      height: 94vh;
    background: none repeat scroll 0 0;
    background-image: url('<?php echo header_image() ?>');
      object-fit: cover;

    }

    </style>
  </head>
  <body>
    <div class="container-fluid hed">

      <div class="row">
        <div class="col-lg-12">
    <div class=" menu1">

      <nav class="navbar navbar-expand-lg navbar-light ">
        <a href="<?php echo home_url( '/' ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="snip1189">  <li ><a>  <?php echo wp_nav_menu( array( 'theme_location' => 'header-menu' ) ) ?>
       </a></li></ul>
        </div>

      </nav>

      <form>
  <input type="text" name="search" placeholder="Search.." class="rech">
</form>


<div class="titre">

<h1 itemprop="headline" >
  <?php bloginfo('name'); ?></h1>
</div>

<div class="slogan">

<h2 itemprop="headline" >
  <?php bloginfo('description'); ?></h2>
</div>


</div>
</div>
</div>
</div>
