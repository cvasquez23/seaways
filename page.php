<?php
/**
*
* @package Seaways
* @since Seaways 1.0
**/
?>

<?php get_header(); ?>

<div id="primary home" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while (have_posts()):
      the_post(); ?>          
        <?php the_content(); ?>
    <?php
    endwhile; ?>

  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
