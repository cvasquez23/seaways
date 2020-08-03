<?php
/**
 * The font-page for Seaways
 *
 * @package Seaways
 * @since Seaways  1.0.0
 */
?>

<?php get_header(); ?>

    <!-- Header -->
    <div id="home" class="header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.55)), url('<?php header_image(); ?>')">
      <div class="display-3">
        <h1> <?php bloginfo('name'); ?> </h1>
        <p class="lead"> <?php bloginfo('description'); ?> </p>
      </div>
    </div>
    <div id="about" class="row about">
      <div class="col-lg-6 about-picture d-none d-lg-block"></div>
      <div class="col-lg-6 my-0 about-text text-center">
        <h2>Welcome to <?php bloginfo('name'); ?></h2>
        <hr align="" />
        <p>
        <?php echo get_post_meta($post->ID, 'about-box', true); ?>
        </p>
        <div class="book-me">
          <a href="<?php echo get_permalink(51); ?>" class="book-now">
          Reserve a Room&nbsp;<i class="fas fa-chevron-right"></i>
          </a>
        </div>
      </div>
    </div>

    <div id="amenities" class="container amenities text-center">
      <h2>Amenities</h2>
      <hr />
      <div class="row justify-content-between justify-content-center">
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center">
              <i class="fal fa-glass-martini-alt"></i>
              <br />
              <span>Bar</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-sun"></i>
              <br />
              <span>Sun Room</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-water"></i>
              <br />
              <span>Water Activities</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-bacon" aria-hidden="true"></i>
              <br />
              <span>Free Breakfast</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-oven" aria-hidden="true"></i>
              <br />
              <span>Kitchenette</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-books" aria-hidden="true"></i>
              <br />
              <span>Library</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="gallery" class="gallery"><?php echo do_shortcode(
      '[modula id="31"]'
    ); ?>
    </div>

    <div id="to-do" class="container amenities text-center">
      <h2>Around Town</h2>
      <hr />
      <div class="row justify-content-between">
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center">
              <i class="fal fa-golf-club" aria-hidden="true"></i>
              <br />
              <span>Golf</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-dice-three" aria-hidden="true"></i>
              <br />
              <span>Casino</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-beer" aria-hidden="true"></i>
              <br />
              <span>Breweries</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-tree-alt" aria-hidden="true"></i>
              <br />
              <span>Nature Walks</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-utensils" aria-hidden="true"></i>
              <br />
              <span>Dining</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card mb-4 mx-auto">
            <div class="text-center my-auto">
              <i class="fal fa-wine-glass-alt"></i>
              <br />
              <span>Winery</span>
              <p class="amenity-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                laudantium.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="contact" class="row">
      <div class="col-lg-6 form-section text-center">
        <h2>Contact Us</h2>

        <hr align="" />

        555 Seaways Ave<br />
        Sea City, State 55555<br />
        Tel:&nbsp;<?php echo get_post_meta(2, 'phone-number', true); ?><br />
        <a href="<?php echo get_post_meta(2, 'email', true); ?>">
          <?php echo get_post_meta(2, 'email', true); ?></a>

        <hr align="" />

        <?php echo do_shortcode(
          '[contact-form-7 id="7" title="Contact form 1"]'
        ); ?>
      </div>
      <div class="col-lg-6 contact-photo"></div>
    </div>
    <?php echo do_shortcode('[wpgmza id="1"]'); ?>

    <?php while (have_posts()):
      the_post(); ?>          
          <?php the_content(); ?>
    <?php
    endwhile; ?>
    </div>

<?php get_footer(); ?>
