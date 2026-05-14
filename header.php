<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="container header-flex">
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo">
                <span class="site-emblem" aria-hidden="true">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/indiana-torch-icon.png" alt="Indiana Torch Logo" class="site-emblem__img" />
                </span>
                <div class="logo-text">
                    <span class="logo-main">IMMAN</span>
                    <span class="logo-sub">Indiana Musician Mutual Aid Network</span>
                </div>
            </a>
        </div>

        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'imman-custom' ); ?></span>
            <span class="hamburger"></span>
        </button>

        <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                ) );
                ?>
                <div class="user-nav">
                    <?php if ( is_user_logged_in() ) : ?>
                        <a href="<?php echo esc_url( home_url( '/account' ) ); ?>">Account</a>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/login' ) ); ?>">Login</a>
                    <?php endif; ?>
                </div>
        </nav>
    </div>
</header>
