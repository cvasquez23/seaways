(function($) {

  // Data Spy
  $('body').scrollspy({ target: '.navbar' });

  //Hamburger Menu
  $(document).ready(function() {
    $('button').click(function() {
      $('button:first').toggleClass('is-active');
      $('body').toggleClass('ofh');
    });
  });

  //Disable .is-active When .nav-link Clicked
  $(document).ready(function() {
    $('.nav-link').click(function() {
      $('button:first').toggleClass('is-active');
      $('#slidingNav').css('display', 'none');
      $('body').removeClass('ofh');
    });
  });

  //Sliding Mobile Nav
  $(document).ready(function() {
    $('[data-toggle="slide-collapse"]').on('click', function() {
      $navMenuCont = $($(this).data('target'));
      $navMenuCont.animate({ width: 'toggle' }, 350);
    });
  });

  //Smooth Scroll Nav Links
  jQuery(document).ready(function() {
    jQuery('a[href^="#"]:not([href="#carouselIndicators"]').click(function(e) {
      e.preventDefault();
      let position = jQuery(jQuery(this).attr('href')).offset().top - 75;
      jQuery('body, html').animate(
        {
          scrollTop: position
        },
        750
      );
    });
  });
})(jQuery);
