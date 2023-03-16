<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields ) ): ?>
    
    <section class="contact block">
        <div class="container">
            <div class="row contact__row">
                <div class="col-md-6 contact__col">
                    <div class="contact__form">
                        <?php if( !empty( $block_fields['title'] ) ): ?>
                            <h2 class="contact__title">
                                <?php echo $block_fields['title']; ?>
                            </h2>
                        <?php endif; ?>
                        <?php if( !empty( $block_fields['description'] ) ): ?>
                            <div class="contact__description">
                                <?php echo $block_fields['description']; ?>
                            </div>
                        <?php endif; ?>
                        <?php
                            if( !empty( $block_fields['form_shortcode'] ) ) {
                                echo do_shortcode( $block_fields['form_shortcode'] );
                            }
                        ?>
                    </div>
                
                </div>
                <?php if( !empty( $block_fields['map_iframe'] ) ): ?>
                    <div class="col-md-6 contact__col">
                        <?php echo $block_fields['map_iframe']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>