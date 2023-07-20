<?php get_header(); ?>
<main id="main">
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
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="entry-content" itemprop="mainContentOfPage">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
                            <?php the_content(); ?>
                            <div class="entry-links"><?php wp_link_pages(); ?></div>
                            <?php edit_post_link(); ?>

                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>