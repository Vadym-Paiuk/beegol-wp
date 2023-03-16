<?php extract( $args ); ?>

<div class="history__item" data-aos="fade-up" data-aos-offset="500">
    <?php if( !empty( $title ) ): ?>
        <div class="history__item-info">
            <p class="history__item-text">
                <?php echo $title; ?>
            </p>
        </div>
    <?php endif; ?>
    <?php if( !empty( $year ) ): ?>
        <div class="history__item-date">
            <div class="history__item-date-value">
                <?php echo $year; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if( !empty( $image ) ): ?>
        <div class="history__item-media">
            <?php echo wp_get_attachment_image_custom( $image, 'full', false, [ 'class' => 'history__item-img' ] ); ?>
        </div>
    <?php endif; ?>
</div>
