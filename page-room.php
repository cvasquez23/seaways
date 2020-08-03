<?php
/**
* Template Name: Room Page
* Template Post Type: page
*
* The room page template for Seaways
*
* @package Seaways
* @since Seaways 1.0
**/
?>

<?php get_header(); ?>


    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
      <div id="home" class="container">
        <h2 class="text-center">Book A Room</h2>
        <div class="row align-items-center col-12 room-title">
          <a href="<?php echo get_permalink(14); ?>" class="back-icon">
            <i class="fal fa-arrow-left"></i>
          </a>
          <span class="divider">&nbsp;|&nbsp;</span>
          <h3><?php echo get_the_title(); ?></h3>
        </div>
      </div><!-- .container -->

      <div class="container">
        <div class="row">

          <div class="col-lg-6">
            <h4>Room Details</h4>
            <p>
              <?php echo get_post_meta($post->ID, 'about-box', true); ?>
            </p>
            <hr />
            <h4>Room Amenities</h4>
            <div class="row space-between">
              <?php
              if (
                get_post_meta($post->ID, 'whirlpool-attached-bath', true) ==
                'yes'
              ) {
                echo '
                <div class="card my-auto col-6">
                  <div class="row align-items-center no-gutters">
                    <div class="col-md-2 text-center">
                      <i class="fal fa-bath tool-tip" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 text-xs-center">
                      <div class="card-body">
                        <p class="card-text">
                          Attached bath with spacious whirlpool tub
                        </p>
                      </div>
                    </div>
                  </div>
                </div>';
              }

              if (get_post_meta($post->ID, 'wifi', true) == 'yes') {
                echo '
                <div class="card my-auto col-6">
                  <div class="row align-items-center no-gutters">
                    <div class="col-md-2 text-center">
                      <i class="fal fa-wifi" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 text-xs-center">
                      <div class="card-body">
                        <p class="card-text">Free WiFi</p>
                      </div>
                    </div>
                  </div>
                </div>';
              }

              if (get_post_meta($post->ID, 'fireplace', true) == 'yes') {
                echo '
                <div class="card my-auto col-6">
                  <div class="row align-items-center no-gutters">
                    <div class="col-md-2 text-center">
                      <i class="fal fa-fireplace" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 text-xs-center">
                      <div class="card-body">
                        <p class="card-text">Wood-burning fireplace</p>
                      </div>
                    </div>
                  </div>
                </div>';
              }

              if (get_post_meta($post->ID, 'sitting-area', true) == 'yes') {
                echo '
                <div class="card my-auto col-6">
                  <div class="row align-items-center no-gutters">
                    <div class="col-md-2 text-center">
                      <i class="fal fa-loveseat" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 text-xs-center">
                      <div class="card-body">
                        <p class="card-text">Sitting area</p>
                      </div>
                    </div>
                  </div>
                </div>
                ';
              }

              if (get_post_meta($post->ID, 'tv', true) == 'yes') {
                echo '
                <div class="card my-auto col-6">
                  <div class="row align-items-center no-gutters">
                    <div class="col-md-2 text-center">
                      <i class="fal fa-tv" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 text-xs-center">
                      <div class="card-body">
                        <p class="card-text">Satellite TV</p>
                      </div>
                    </div>
                  </div>
                </div>
                ';
              }

              if (get_post_meta($post->ID, 'ac', true) == 'yes') {
                echo '
                <div class="card my-auto col-6">
                  <div class="row align-items-center no-gutters">
                    <div class="col-md-2 text-center">
                      <i class="fal fa-air-conditioner" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 text-xs-center">
                      <div class="card-body">
                        <p class="card-text">A/C</p>
                      </div>
                    </div>
                  </div>
                </div>
                ';
              }

              if (get_post_meta($post->ID, 'heat', true) == 'yes') {
                echo '
                <div class="card my-auto col-6">
                  <div class="row align-items-center no-gutters">
                    <div class="col-md-2 text-center">
                      <i class="fal fa-heat" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 text-xs-center">
                      <div class="card-body">
                        <p class="card-text">Individually controlled heat</p>
                      </div>
                    </div>
                  </div>
                </div>
                ';
              }
              ?>
            </div>
            <hr />
            <h4>Policies</h4>
            <p>
              <span class="policies">Breakfast Time:</span>&nbsp;
                <?php echo get_post_meta(14, 'breakfast-time', true); ?><br />
              <span class="policies">Check-in Time:</span>&nbsp
                <?php echo get_post_meta(14, 'check-in', true); ?><br />
              <span class="policies">Check-out Time:</span>&nbsp;
                <?php echo get_post_meta(14, 'check-out', true); ?><br />
            </p>
            <p>
              <?php echo get_post_meta(14, 'policy-diction', true); ?>
            </p>
          </div>


          <div class="col-lg-6">
            <div class="row">
              <!-- Carousel -->
              <div
                id="carouselIndicators"
                class="carousel slide carousel-fade"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#carouselIndicators"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#carouselIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">

                  <?php
                  $images = rwmb_meta('room-carousel', array(
                    'size' => 'auto'
                  ));
                  $i = 0;
                  foreach ($images as $image) {
                    if ($i == 0) {
                      echo '
                        <div class="carousel-item active">
                          <img src="',
                        $image['url'],
                        '" class="d-block" />
                        </div>
                        ';
                    } else {
                      echo '
                        <div class="carousel-item">
                          <img src="',
                        $image['url'],
                        '" class="d-block" />
                        </div>
                        ';
                    }
                    $i++;
                  }
                  ?>

                </div>
                <a
                  class="carousel-control-prev exclude"
                  href="#carouselIndicators"
                  role="button"
                  data-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next exclude" href="#carouselIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="text-center book-btn">
                <a
                  href="#"
                  class="btn btn-primary book-now"
                  >Reserve <?php echo get_the_title(); ?>
                </a>
              </div>
            </div>
          </div>

          <div class="container">
            <div id="contact" class="row justify-content-center">
              <div class=" form-section text-center">
                <h2>Questions?</h2>

                <hr align="" />

                555 Seaways Ave<br />
                Sea City, State 55555<br />
                Tel:&nbsp;<?php echo get_post_meta(
                  2,
                  'phone-number',
                  true
                ); ?><br />
                <a href="<?php echo get_post_meta(2, 'email', true); ?>">
                <?php echo get_post_meta(2, 'email', true); ?></a>

                <hr align="" />

                <?php echo do_shortcode(
                  '[contact-form-7 id="56" title="Room Contact Form"]'
                ); ?>
              </div>
            </div>
          </div>
            
      </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>
