<?php
/**
 * The index for Seaways Theme
 *
 * @package Seaways
 * @since Seaways Theme 1.0.0
 */
?>

<?php get_header(); ?>

    <div class="justify-content-center">
      <h2 class="text-center">Index</h2>
      <hr />
    </div>

    <div class="container">
      <div class="row justify-content-between">
        <?php if (have_posts()): ?>
        <?php while (have_posts()):
          the_post(); ?>
        <?php $featured_img_url = get_the_post_thumbnail_url(
          get_the_ID(),
          'full'
        ); ?>
        <div class="col-lg-4">
          <div class="card mb-5" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $featured_img_url; ?>" alt="<?php the_title_attribute(); ?>">
            <div class="card-body">
              <h4 class="card-title"><?php the_title(); ?></h4>
              <p class="card-text"><?php the_content(); ?></p>
            </div>
          </div>
        </div>
        <?php
        endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>
            <?php esc_html_e('Sorry, there\'s nothing here at the moment.'); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>

<?php get_footer(); ?>
