<?php
    $block_fields = get_field( 'block_fields' );
?>

<?php if( !empty( $block_fields ) ): ?>
    <section class="contact-us block">
        <div class="container">
            <?php if( !empty( $block_fields['title'] ) ): ?>
                <h2 class="contact-us__title">
                    <?php echo $block_fields['title']; ?>
                </h2>
            <?php endif; ?>
            <div class="contact-us__form">
                <?php echo do_shortcode( $block_fields['form_shortcode'] ); ?>
            </div>
        
        </div>
    </section>
<?php endif; ?>