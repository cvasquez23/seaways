<?php
/**
  * The footer for Seaways
  *
  * @package Seaways
  * @since Seaways 1.0
**/
?>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row justify-content-center py-1">
          <a class="back-to-top scroll" href="#home"><i class="fas fa-chevron-up fa-2x fa-up"></i></a><br>
        </div>
        <div class="row justify-content-center py-1">
          <a class="back-to-top scroll" href="#home">Back to top</a>
        </div>
        <div class="row social-footer justify-content-center py-1">
          <a href="#" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="#" target="_blank"><i class="fab fa-tripadvisor fa-2x"></i></a>
        </div>
        <div class="row justify-content-center py-1 credit">
          <p>&copy <?php echo date('Y'); ?> Chris Vasquez</p>
        </div>
        <div class="row justify-content-center credit">
          <p>Developed by
            <a href="https://www.chrisvasquez.dev" target="_blank">Chris Vasquez</a>&nbsp 
            <a href="www.wordpress.org" target="_blank">powered by WordPress</a>
          </p>
        </div>
      </div>
      <div class="modal"></div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>