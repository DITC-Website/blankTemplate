<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2><?php the_title(); ?></h2>
            <ol>
                <li><a href="<?php $site_url = home_url(); echo $site_url;?>">Home</a></li>
                <li><?php the_title(); ?></li>
            </ol>
        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>