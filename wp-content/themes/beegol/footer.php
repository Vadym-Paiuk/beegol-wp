<?php $settings = get_field( 'settings', 'options' ); ?>

<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__logo logo">
                <a href="/">
                    <?php
                        echo wp_get_attachment_image( $settings['logo_image'], 'full' );
                        echo $settings['logo_title'];
                    ?>
                </a>
            </div>
            <div class="footer__navigation">
                <?php
                    wp_nav_menu( [
                        'theme_location'  => 'bottom-menu',
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => 'menu-footer-menu-container',
                        'container_id'    => '',
                        'menu_class'      => 'menu footer-menu',
                        'menu_id'         => 'footer-menu',
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
            </div>
            <?php if( !empty( $settings['socials'] ) ): ?>
                <div class="footer__social">
                    <nav class="social">
                        <a href="<?php echo $settings['socials']['linkedin']; ?>" class="social__link social__link--linkedin" target="_blank"></a>
                    </nav>
                </div>
            <?php endif; ?>
            
        </div>
        
        <?php if( !empty( $settings['locations'] ) ): ?>
        <div class="footer__middle">
            <div class="location">
                <p class="location__title">
                    Location
                </p>
                <div class="location__list">
                    <?php
                        foreach ( $settings['locations'] as $location) {
                            setup_postdata( $GLOBALS['post'] =& $location );
                            get_template_part( 'parts/location' );
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>

        </div>
        <?php endif; ?>
        <div class="footer__bottom">
            <?php if( !empty( $settings['copyright'] ) ): ?>
                <div class="footer__copyright">
                    <?php echo $settings['copyright']; ?>
                </div>
            <?php endif; ?>
    
            <?php if( !empty( $settings['privacy_policy_button'] ) ): ?>
                <a href="<?php echo $settings['privacy_policy_button']['url']; ?>" class="footer__privacy" target="<?php echo $settings['privacy_policy_button']['target']; ?>">
                    <?php echo $settings['privacy_policy_button']['title']; ?>
                </a>
            <?php endif; ?>
            
        </div>
    </div>
</footer>

<?php wp_footer();?>

</body>
</html>