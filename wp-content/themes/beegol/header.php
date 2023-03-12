<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/dist/preview.jpg">

    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <?php wp_head(); ?>
</head>

<body>

<?php $settings = get_field( 'settings', 'options' ); ?>

<header class="header <?php if( is_page( 5 ) ) echo 'header--solutions'; ?>">
    <div class="container">
        <div class="header__inner">
            <div class="logo header__logo">
                <a href="/">
                    <?php
                        echo wp_get_attachment_image( $settings['logo_image'], 'full' );
                        echo $settings['logo_title'];
                    ?>
                </a>
            </div>
            <div class="header__navigation">
                <nav class="header__navigation-main">
                    <!-- wp_nav_menu() - primary-menu -->
                    <?php
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'menu-primary-menu-container',
                            'container_id'    => '',
                            'menu_class'      => 'menu primary-menu',
                            'menu_id'         => 'primary-menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] );
                    ?>

                </nav>
                <?php if( !empty( $settings['meet_whis_us_button'] ) ): ?>
                    <nav class="header__navigation-secondary">
                        <a href="<?php echo $settings['meet_whis_us_button']['url']; ?>" class="btn header__btn" target="<?php echo $settings['meet_whis_us_button']['target']; ?>"><?php echo $settings['meet_whis_us_button']['title']; ?></a>
                    </nav>
                <?php endif; ?>
            </div>
            <button type="button" class="header__navigation-btn-menu" data-toggle=".header__navigation">
                <span></span><span></span><span></span>
            </button>



        </div>
    </div>
</header>