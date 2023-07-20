<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <?php
          if (is_active_sidebar('address_widget')) {
            dynamic_sidebar('address_widget');
          }
          ?>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <?php
          if (is_active_sidebar('footer_widget2')) {
            dynamic_sidebar('footer_widget2');
          }
          ?>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <?php
          if (is_active_sidebar('footer_widget3')) {
            dynamic_sidebar('footer_widget3');
          }
          ?>

        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <?php
          if (is_active_sidebar('footer_widget4')) {
            dynamic_sidebar('footer_widget4');
          }
          ?>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span><?php
                                      // Get the site title
                                      $site_title = get_bloginfo('name');
                                      echo $site_title;
                                      ?></span></strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>