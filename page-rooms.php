<?php
/**
* Template Name: Rooms Page
* Template Post Type: page
*
* @package Seaways
* @since Seaways 1.0
**/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <div id="home" class="container justify-content-center">
    <h2 class="text-center">Book A Room</h2>
    <h4>Our Rooms</h4>
    <hr />
    <div class="row justify-content-center">

    <?php
    $args = array(
      'post_type' => 'page',
      'posts_per_page' => -1,
      'post_parent' => 14,
      'order' => 'ASC',
      'orderby' => 'menu_order'
    );
    $parent = new WP_Query($args);
    if ($parent->have_posts()): ?>

    <?php while ($parent->have_posts()):
      $parent->the_post(); ?>

    <!-- ROOM -->
      <div class="card mb-3" style="max-width: 860px;">
        <div class="row align-items-center no-gutters">
          <div class="col-md-4 text-center room-pic">
            <?php echo get_the_post_thumbnail(); ?>
          </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title"><?php echo esc_html(
                  get_the_title()
                ); ?></h5>
                <p class="card-text">
                  <?php echo get_post_meta(get_the_ID(), 'brief-desc', true); ?>
                </p>
                <p class="card-text amenities-icon">
                
                <?php if (
                  get_post_meta(
                    get_the_ID(),
                    'whirlpool-attached-bath',
                    true
                  ) == 'yes'
                ) {
                  echo '<i class="fal fa-bath tool-tip" aria-hidden="true"><span>Whirlpool Tub</span></i>';
                } ?>

                <?php if (
                  get_post_meta(get_the_ID(), 'fireplace', true) == 'yes'
                ) {
                  echo '<i class="fal fa-fireplace tool-tip" aria-hidden="true"><span>Wood Burning Fireplace</span></i>';
                } ?>

                <?php if (
                  get_post_meta(get_the_ID(), 'sitting-area', true) == 'yes'
                ) {
                  echo '<i class="fal fa-loveseat tool-tip" aria-hidden="true"><span>Sitting Area</span></i>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'tv', true) == 'yes') {
                  echo '<i class="fal fa-tv tool-tip" aria-hidden="true"><span>Satellite TV</span></i>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'ac', true) == 'yes') {
                  echo '<i class="fal fa-air-conditioner tool-tip" aria-hidden="true"><span>Air Conditioning</span></i>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'heat', true) == 'yes') {
                  echo '<i class="fal fa-heat tool-tip" aria-hidden="true"><span>Controlled Heat</span></i>';
                } ?>
                
                <?php if (get_post_meta(get_the_ID(), 'wifi', true) == 'yes') {
                  echo '<i class="fal fa-wifi tool-tip" aria-hidden="true"><span>Free WiFi</span></i>';
                } ?>              

                </p>
              </div>
            </div>
          <div class="col-md-2 text-center">
            <p class="card-text">From<br /><span>$<?php echo get_post_meta(
              get_the_ID(),
              'min-price',
              true
            ); ?></span></p>
            <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>

      <?php
    endwhile; ?>
          <?php endif;
    wp_reset_postdata();
    ?>

    </div><!-- end .row -->
    </div><!-- end .container -->

    <div class="container">
      <div id="contact" class="row justify-content-center">
        <div class=" form-section text-center">
          <h2>Questions?</h2>

          <hr align="" />

          555 Seaways Ave<br />
          Sea City, State 55555<br />
          Tel:&nbsp;<?php echo get_post_meta(2, 'phone-number', true); ?><br />
          <a href="<?php echo get_post_meta(
            32,
            'email',
            true
          ); ?>" class="contact-email">
          <?php echo get_post_meta(2, 'email', true); ?></a>

          <hr align="" />

          <?php echo do_shortcode(
            '[contact-form-7 id="28" title="Contact form 1"]'
          ); ?>
        </div>
      </div>
    </div>

  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
