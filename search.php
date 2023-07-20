<?php get_header(); ?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2><?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
            </h2>
        </div>

    </div>
</section>
<?php if ( have_posts() ) : ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'entry' ); ?>
                <?php endwhile; ?>
                <?php get_template_part( 'nav', 'below' ); ?>
                <?php else : ?>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <article id="post-0" class="post no-results not-found">
                                    <div class="entry-content" itemprop="mainContentOfPage">
                                        <p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?>
                                        </p>
                                        <?php get_search_form(); ?>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>