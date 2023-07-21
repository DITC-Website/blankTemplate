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

        <div class="col-lg-4 col-md-6 text-center">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt=""
            style="width:130px; height:130px" /><br>
          <a href="https://nagaland.gov.in" class="d-block mt-2 text-light" target="_blank"><b>nagaland.gov.in</b></a>
        </div>
      </div>
    </div>
  </div>

  <div class=" container">
    <div class="copyright">
      <p style="font-size:12px;color:#f2f2f2">For best experience view site in 1024 X 1080 resolution.
        <br />Supports
        all
        modern browsers Chrome v84+, Safari 4+, Mozilla Firefox v90+.
        The website of <?php echo get_bloginfo('name');?> is W3C, GIGW and WCAG 2.0 compliant</p>
      &copy; Copyright <strong><span><?php
                                      // Get the site title
                                      $site_title = get_bloginfo('name');
                                      echo $site_title;
                                      ?></span></strong>. All Rights Reserved <br />
      <a href='/privacy-policy' style="color:#c4c4c4">Privacy Policy</a> |
      <a href='/terms-of-use' style="color:#c4c4c4">Terms of Use</a> |
      <a href='/copyright-statement' style="color:#c4c4c4">Copyright Statement</a> |
      <a href='/disclaimer' style="color:#c4c4c4">Disclaimer</a> |
      <a href='/accessibility-statement' style="color:#c4c4c4">Accessibility Statement</a>

    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

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