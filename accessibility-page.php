<?php /* Template Name: Accessibility Page */ ?>
<?php get_header(); ?>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h4>Accessibility Statement</h4>
      <ol>
        <li><a href="<?php $site_url = home_url(); echo $site_url;?>">Home</a></li>
        <li>Accessibility Statement</li>
      </ol>
    </div>

  </div>
</section>
<main id="main">
  <section>
    <div class="container">
      <div class="col-md-12">
        <h4>Conformance Status</h4>
        <p>The Web Content Accessibility Guidelines (WCAG) defines requirements for designers and developers to improve
          accessibility for people with disabilities. It defines three levels of conformance: Level A, Level AA, and
          Level AAA. Website of <?php echo get_bloginfo('name');?> is fully conformant with WCAG 2.0 level AA. Fully
          conformant
          means that the
          content fully conforms to the accessibility standard without any exceptions.</p>

        <h4>Feedback</h4>
        <p>We welcome your feedback on the accessibility of <?php echo home_url();?>. Please let us know if
          you encounter
          accessibility barriers on <?php echo get_bloginfo('name');?>:</p>
        </body>

        </html>

        <h4>Contact Us</h4>
        <p>If you have any questions, you can contact us:</p>
        <p>
          <?php
            if (is_active_sidebar('address_widget')) {
              dynamic_sidebar('address_widget');
            }
          ?>
        </p>
      </div>
    </div>
  </section>

</main><!-- End #main -->
<?php get_footer(); ?>