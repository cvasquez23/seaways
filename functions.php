<?php
// Load Styles & Scripts
function enqueue_seaways_styles()
{
  // Bootstrap
  wp_enqueue_style(
    'bootstrap',
    '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
  );
  // Font Awesome
  wp_enqueue_style(
    'fontawesome',
    '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'
  );
  // Google Fonts
  wp_enqueue_style(
    'googlefont',
    '//fonts.googleapis.com/css?family=Open+Sans|Raleway:300i,400&display=swap" rel="stylesheet'
  );
  // CSS
  wp_enqueue_style('seaways-style', get_stylesheet_uri());

  // Font Awesome
  wp_enqueue_script('fontawesome', '//kit.fontawesome.com/224419b69f.js');
  // JQuery
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
  // Popper
  wp_enqueue_script(
    'popper',
    '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
  );
  // Bootstrap JS
  wp_enqueue_script(
    'bootstrap-js',
    '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
    array('jquery')
  );
  // Custom JS
  wp_enqueue_script(
    'script',
    get_template_directory_uri() . '/js/script.js',
    array('jquery')
  );
}
add_action('wp_enqueue_scripts', 'enqueue_seaways_styles');

// Custom Header & Featured Images
function seaways_custom_header_setup()
{
  $args = array(
    'default-image' => get_template_directory_uri() . 'img/default-img.jpg',
    'header-text' => true,
    'default-text-color' => '000',
    'width' => 1000,
    'height' => 250,
    'flex-width' => true,
    'flex-height' => true
  );
  add_theme_support('custom-header', $args);
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'seaways_custom_header_setup');

// Add Documentation Link to WordPress Admin Bar

// Add Logo Support
function seaways_custom_logo_setup()
{
  $defaults = array(
    'height' => 100,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array('site-title', 'site-description')
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'seaways_custom_logo_setup');

function seaways_setup()
{
  //Register a primary nav menu
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'seaways'),
    'secondary' => __('Secondary Menu', 'seaways')
  ));
  // Register Custom Navigation Walker
  require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
  //Add theme support for document title tag
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'seaways_setup');

//Add Anchor Class
add_filter(
  'nav_menu_link_attributes',
  function ($atts, $item, $args) {
    if ('nav-item' === $item->classes[0]) {
      $atts['class'] = 'nav-link text-uppercase';
    }
    return $atts;
  },
  10,
  3
);

// Add Link to WP Toolbar
function custom_toolbar_link($wp_admin_bar)
{
  $args = array(
    'id' => 'seaways-doc',
    'title' => 'Seaways Documentation',
    'href' => 'https://github.com/cvasquez23/seaways/blob/master/README.md',
    'meta' => array(
      'class' => 'seaways-doc'
    )
  );
  $wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'custom_toolbar_link', 999);

// Add About Metabox
function add_about_box($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'about',
    'title' => esc_html__('About', 'about-box'),
    'post_types' => array('post', 'page'),
    'context' => 'advanced',
    'priority' => 'high',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'about-box',
        'type' => 'textarea',
        'name' => esc_html__('About', 'about-box'),
        'placeholder' => esc_html__('About text here', 'about-box'),
        'rows' => 10
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_about_box');

// Add Contact Info
function add_contact_info($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'contact-info',
    'title' => esc_html__('Contact Info', 'contact-info'),
    'post_types' => array('page'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'phone-number',
        'type' => 'text',
        'name' => esc_html__('Contact Number', 'contact-info'),
        'placeholder' => esc_html__('(555) 555-5555', 'contact-info')
      ),
      array(
        'id' => 'email',
        'type' => 'text',
        'name' => esc_html__('Contact Email', 'contact-info'),
        'placeholder' => esc_html__('email@domain.com', 'contact-info')
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_contact_info');

// Add Minimum Room Price
function add_minimum_price($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'min-price',
    'title' => esc_html__('Minimum Room Price', 'minimum-price'),
    'post_types' => array('page'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'min-price',
        'type' => 'number',
        'name' => esc_html__('Minimum Room Price', 'minimum-price')
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_minimum_price');

// Add Policy Meta Data
function add_policies($meta_boxes)
{
  $prefix = '';

  $meta_boxes[] = array(
    'id' => 'policies',
    'title' => esc_html__('Policies', 'policies'),
    'post_types' => array('page'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'breakfast-time',
        'name' => esc_html__('Breakfast Time', 'policies'),
        'type' => 'time',
        'js_options' => array(
          'timeFormat' => 'h:mm TT'
        )
      ),
      array(
        'id' => 'check-in',
        'name' => esc_html__('Check In Time', 'policies'),
        'type' => 'time',
        'js_options' => array(
          'timeFormat' => 'h:mm TT'
        )
      ),
      array(
        'id' => 'check-out',
        'name' => esc_html__('Check Out Time', 'policies'),
        'type' => 'time',
        'js_options' => array(
          'timeFormat' => 'h:mm TT'
        )
      ),
      array(
        'id' => 'policy-diction',
        'type' => 'textarea',
        'name' => esc_html__('Policies', 'policies'),
        'placeholder' => esc_html__('Policy Diction Goes Here', 'policies')
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_policies');

// Add Brief Room Description
function add_brief_description($meta_boxes)
{
  $prefix = '_';

  $meta_boxes[] = array(
    'id' => 'brief-desc',
    'title' => esc_html__('Brief Room Description', 'brief-description'),
    'post_types' => array('page'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'brief-desc',
        'type' => 'textarea',
        'name' => esc_html__('Brief Room Description', 'brief-description'),
        'desc' => esc_html__(
          'A brief (~20 words) description of the room - will be shown on rooms page.',
          'brief-description'
        ),
        'placeholder' => esc_html__(
          'Brief room description here...',
          'brief-description'
        )
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_brief_description');

// Add Room Carousel
function add_room_carousel($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'room-carousel',
    'title' => esc_html__('Room Carousel', 'Room-carousel'),
    'post_types' => array('page'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'room-carousel',
        'type' => 'image_advanced',
        'name' => esc_html__('Room Carousel', 'room-carousel'),
        'max_file_uploads' => '6'
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_room_carousel');

// Add Amenities Metabox
add_action('add_meta_boxes', 'add_custom_box');

function add_custom_box($post)
{
  add_meta_box(
    'Meta Box', // ID, should be a string.
    'Amenities', // Meta Box Title.
    'amenities_meta_box', // Your call back function, this is where your form field will go.
    'page', // The post type you want this to show up on, can be post, page, or custom post type.
    'side', // The placement of your meta box, can be normal or side.
    'core' // The priority in which this will be displayed.
  );
}

function amenities_meta_box($post)
{
  wp_nonce_field('sv_amenities_nonce', 'amenities_nonce');
  $checkboxMeta = get_post_meta($post->ID);
  ?>

<input type="checkbox" name="whirlpool-attached-bath" id="whirlpool-attached-bath" value="yes" <?php if (
  isset($checkboxMeta['whirlpool-attached-bath'])
) {
  checked($checkboxMeta['whirlpool-attached-bath'][0], 'yes');
} ?> />Whirlpool & Attached Bath<br />
<input type="checkbox" name="fireplace" id="fireplace" value="yes" <?php if (
  isset($checkboxMeta['fireplace'])
) {
  checked($checkboxMeta['fireplace'][0], 'yes');
} ?> />Fireplace<br />
<input type="checkbox" name="sitting-area" id="sitting-area" value="yes" <?php if (
  isset($checkboxMeta['sitting-area'])
) {
  checked($checkboxMeta['sitting-area'][0], 'yes');
} ?> />Sitting Area<br />

<input type="checkbox" name="tv" id="tv" value="yes" <?php if (
  isset($checkboxMeta['tv'])
) {
  checked($checkboxMeta['tv'][0], 'yes');
} ?> />TV<br />

<input type="checkbox" name="ac" id="ac" value="yes" <?php if (
  isset($checkboxMeta['ac'])
) {
  checked($checkboxMeta['ac'][0], 'yes');
} ?> />A/C<br />

<input type="checkbox" name="heat" id="heat" value="yes" <?php if (
  isset($checkboxMeta['heat'])
) {
  checked($checkboxMeta['heat'][0], 'yes');
} ?> />Individually Controlled Heat<br />

<input type="checkbox" name="wifi" id="wifi" value="yes" <?php if (
  isset($checkboxMeta['wifi'])
) {
  checked($checkboxMeta['wifi'][0], 'yes');
} ?> />WiFi<br />
<?php
}

add_action('save_post', 'save_services_checkboxes');
function save_services_checkboxes($post_id)
{
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  if (
    isset($_POST['seaways_theme']) &&
    !wp_verify_nonce($_POST['seaways_theme'], plugin_basename(__FILE__))
  ) {
    return;
  }
  if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
    if (!current_user_can('edit_page', $post_id)) {
      return;
    }
  } else {
    if (!current_user_can('edit_post', $post_id)) {
      return;
    }
  }

  // Saves Values
  if (isset($_POST['whirlpool-attached-bath'])) {
    update_post_meta($post_id, 'whirlpool-attached-bath', 'yes');
  } else {
    update_post_meta($post_id, 'whirlpool-attached-bath', 'no');
  }

  if (isset($_POST['fireplace'])) {
    update_post_meta($post_id, 'fireplace', 'yes');
  } else {
    update_post_meta($post_id, 'fireplace', 'no');
  }

  if (isset($_POST['sitting-area'])) {
    update_post_meta($post_id, 'sitting-area', 'yes');
  } else {
    update_post_meta($post_id, 'sitting-area', 'no');
  }

  if (isset($_POST['tv'])) {
    update_post_meta($post_id, 'tv', 'yes');
  } else {
    update_post_meta($post_id, 'tv', 'no');
  }

  if (isset($_POST['ac'])) {
    update_post_meta($post_id, 'ac', 'yes');
  } else {
    update_post_meta($post_id, 'ac', 'no');
  }

  if (isset($_POST['heat'])) {
    update_post_meta($post_id, 'heat', 'yes');
  } else {
    update_post_meta($post_id, 'heat', 'no');
  }

  if (isset($_POST['wifi'])) {
    update_post_meta($post_id, 'wifi', 'yes');
  } else {
    update_post_meta($post_id, 'wifi', 'no');
  }
}

//

// Prevent Wordpress From Adding Elements
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
?>
