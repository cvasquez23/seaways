<?php
/**
* Template Name: Alert Page
* Template Post Type: page
*
* The alert page template for Seaways
*
* @package Seaways
* @since Seaways 1.0
**/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <div class="container justify-content-center">
    <h2 class="text-center"><?php echo get_the_title(); ?></h2>

    <?php while (have_posts()):
      the_post(); ?>          
        <?php the_content(); ?>
    <?php
    endwhile; ?>

  </div>

  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>

