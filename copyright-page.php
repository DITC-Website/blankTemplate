<?php /* Template Name: Copyright Page */ ?>
<?php get_header(); ?>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h4>Copyright Statement</h4>
      <ol>
        <li><a href="<?php $site_url = home_url(); echo $site_url;?>">Home</a></li>
        <li>Copyright Statement</li>
      </ol>
    </div>

  </div>
</section>
<main id="main">
  <section>
    <div class="container">
      <div class="col-md-12">
        <p>Except as permitted by the copyright law applicable to you, you may not reproduce or communicate any of the
          content on this website, including files downloadable from this website, without the permission of the
          copyright
          owner.</p>

        <p>The Government of Nagaland allows certain uses of content from the internet without the copyright owner’s
          permission. This includes uses by educational institutions and by Commonwealth and State governments, provided
          fair compensation is paid.</p>

        <p>The owners of copyright in the content on this website may receive compensation for the use of their content
          by
          educational institutions and governments, including from licensing schemes managed by Copyright Agency.</p>

        <h4>Contact Us</h4>
        <p>If you have any questions about this Copyright Statement, you can contact us:</p>
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