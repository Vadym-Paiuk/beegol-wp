<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields ) ): ?>
    <section class="stores block">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-5 col-sm-12">
                    <?php if( !empty( $block_fields['subtitle_upper'] ) ): ?>
                        <p class="stores__subtitle">
                            <?php echo $block_fields['subtitle_upper']; ?>
                        </p>
                    <?php endif; ?>
                    <?php if( !empty( $block_fields['title'] ) ): ?>
                        <h2 class="stores__title">
                            <?php echo $block_fields['title']; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if( !empty( $block_fields['subtitle_down'] ) ): ?>
                        <p class="stores__description">
                            <?php echo $block_fields['subtitle_down']; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-xl-6 col-md-7 col-sm-12">
                    <div class="stores__list">
                        <?php
                            global $post;
                            $current_post = $post;
                            foreach ( $block_fields['locations'] as $location) {
                                if( !is_admin() ){
                                    setup_postdata( $GLOBALS['post'] =& $location );
                                    get_template_part( 'parts/store' );
                                }
                            }
                            wp_reset_postdata();
                            //setup_postdata( $GLOBALS['post'] =& $current_post );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>