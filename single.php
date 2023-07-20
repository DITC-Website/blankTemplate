<?php get_header(); ?>
<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry' ); ?>
                <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>


</section>

<footer class="footer">
    <?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>