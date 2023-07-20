<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'your-theme-textdomain'); ?></span>
        <input type="search" class="search-field form-control form-control-sm"
            placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'your-theme-textdomain'); ?>"
            value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit btn btn-success btn-sm">
        <i class="bi bi-search"></i>
        <span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'your-theme-textdomain'); ?></span>
    </button>
</form>