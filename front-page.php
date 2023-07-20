<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section class="py-0">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <?php
           echo do_shortcode('[smartslider3 slider="2"]');
        ?>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <b class="card-title">LATEST POST</b>
          </div>
          <div class="card-body">
            <?php
              $args = array(
                  'posts_per_page' => 4,
                  'order' => 'DESC',
                  'orderby' => 'date',
              );

              $latest_posts = new WP_Query($args);

              if ($latest_posts->have_posts()) {
                  while ($latest_posts->have_posts()) {
                      $latest_posts->the_post();
              ?>

            <!-- Custom HTML structure for the latest post -->
            <h5 style="font-size:14px;font-weight:600" class="mb-0"><?php the_title(); ?></h5>
            <span style="font-size:13px;color:brown"><i class="bi bi-calendar3"></i>
              <?php echo get_the_date(); ?></span>
            <hr>
            <?php
                  }
              }

              wp_reset_postdata(); // Reset the post data to the main loop
              ?>
            <a href="" class="btn btn-danger btn-sm">View More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<main id="main">
  <section id="about" class="about">
    <div class="container">
      <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
      <?php
        }
    }
    ?>
    </div>
  </section>

</main><!-- End #main -->
<?php get_footer(); ?>