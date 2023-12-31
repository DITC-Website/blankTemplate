<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php if (is_singular()) {
            echo '';
        } else {
            echo '<h3 class="entry-title mb-0">';
        } ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" class="mb-0"><?php the_title(); ?></a>
        <?php if (is_singular()) {
            echo '';
        } else {
            echo '</h3>';
        } ?>
        <?php edit_post_link(); ?>
        <?php if (!is_search()) {
            get_template_part('entry', 'meta');
        } ?>
    </header>
    <?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>
</article>