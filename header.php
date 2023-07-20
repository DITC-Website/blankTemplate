<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <?php if (is_active_sidebar('contact_widget')) : ?>
                <div class="contact-info d-flex align-items-center">

                    dynamic_sidebar('contact_widget');
                </div>
            <?php endif; ?>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="topbar-links d-flex align-items-center">
                <?php
                if (is_active_sidebar('topbar_widget')) {
                    dynamic_sidebar('topbar_widget');
                }
                ?>
            </div>
            <div>
                <?php get_search_form(); ?>
            </div>
        </div>
    </section>
    <header id="header" class="d-flex align-items-center">

        <div class="container d-flex align-items-center">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if (has_custom_logo()) {
                echo '<a href="' . home_url() . '" class="logo me-auto"><img
                src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="img-fluid"></a>';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?>
            <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <?php
            wp_nav_menu(array('walker' => new Blank_Slate_Walker(), 'container' => 'nav', 'container_id' => 'navbar', 'container_class' => 'navbar', 'menu_class' => '', 'theme_location' => 'header-menu', 'fallback_cb' => false, 'items_wrap' => '<ul id="%1$s" class="menu-main">%3$s</ul><i class="bi bi-list mobile-nav-toggle"></i>'));

            ?>



        </div>
    </header><!-- End Header -->