<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section class="py-0">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <?php
        echo do_shortcode('[smartslider3 slider="3"]');
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
                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                  <h5 style="font-size:14px;font-weight:600;color:black" class="mb-0"><?php the_title(); ?></h5>
                  <span style="font-size:13px;color:brown"><i class="bi bi-calendar3"></i>
                    <?php echo get_the_date(); ?></span>
                </a>
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
  <section id="about" class="about pb-0">
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
  <section style="background:#f8f9fa">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php
          if (is_active_sidebar('address_widget')) {
            dynamic_sidebar('address_widget');
          }
          ?>
        </div>
        <div class="col-md-8">
          <?php
          if (is_active_sidebar('map_widget')) {
            dynamic_sidebar('map_widget');
          }
          ?>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
<?php get_footer(); ?>