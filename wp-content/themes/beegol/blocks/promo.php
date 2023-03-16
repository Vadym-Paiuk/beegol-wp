<?php
    $block_fields = get_field( 'block_fields' );
?>

<section class="block promo">
    <div class="container">
        <div class="row promo__row">
            <div class="col-lg-6 col-sm-12 promo__col">
                <?php if( !empty( $block_fields['subtitle'] ) ): ?>
                    <p class="promo__subtitle">
                        <b>
                            <?php echo $block_fields['subtitle']; ?>
                        </b>
                    </p>
                <?php endif; ?>
                <?php if( !empty( $block_fields['title'] ) ): ?>
                    <h1 class="promo__title">
                        <?php echo $block_fields['title']; ?>
                    </h1>
                <?php endif; ?>
                <?php if( !empty( $block_fields['button'] ) ): ?>
                    <a href="<?php echo $block_fields['button']['url']; ?>" class="btn" target="<?php echo $block_fields['button']['target']; ?>">
                        <?php echo $block_fields['button']['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
    
            <?php if( !empty( $block_fields['image'] ) ): ?>
                <div class="col-lg-5 col-sm-10 promo__col">
                    <?php echo wp_get_attachment_image_custom( $block_fields['image'], 'full', false, [ 'class' => 'promo__img' ] ); ?>
                </div>
            <?php endif; ?>
        </div>
    
        <?php if( !empty( $block_fields['customers'] ) ): ?>
            <div class="promo__customers customers">
                <p class="customers__text">
                    <b><?php echo $block_fields['customers']['title']; ?></b>
                </p>
                <?php if( !empty( $block_fields['customers']['list'] ) ): ?>
                    <div class="customers__list">
                        <span class="customers__list-marquee-line">
                            <?php
                                foreach ( $block_fields['customers']['list'] as $customer ) {
                                    echo wp_get_attachment_image_custom( $customer['image'], 'full', false, [ 'class' => 'customers__item' ] );
                                }
                            ?>
                        </span>
                        <span class="customers__list-marquee-line">
                            <?php
                                foreach ( $block_fields['customers']['list'] as $customer ) {
                                    echo wp_get_attachment_image_custom( $customer['image'], 'full', false, [ 'class' => 'customers__item' ] );
                                }
                            ?>
                        </span>
                        <span class="customers__list-marquee-line">
                            <?php
                                foreach ( $block_fields['customers']['list'] as $customer ) {
                                    echo wp_get_attachment_image_custom( $customer['image'], 'full', false, [ 'class' => 'customers__item' ] );
                                }
                            ?>
                        </span>
                    </div>
                <?php endif; ?>
                
            </div>
        <?php endif; ?>
    
    </div>
</section>
