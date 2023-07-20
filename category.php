<?php get_header(); ?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2><?php single_term_title(); ?></h1>
            </h2>
        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('entry'); ?>
                <?php endwhile;
                endif; ?>
                <?php get_template_part('nav', 'below'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>