<?php extract( $args ); ?>

<div class="col-md-6 col-sm-8 experience__col">
    <div class="experience-item">
        <?php if( !empty( $title ) ): ?>
            <h4 class="experience-item__title">
                <?php echo $title; ?>
            </h4>
        <?php endif; ?>
        <?php if( !empty( $image ) ): ?>
            <?php echo wp_get_attachment_image_custom( $image, 'full', false, [ 'class' => 'experience-item__img' ] ); ?>
        <?php endif; ?>
        <?php if( !empty( $description ) ): ?>
            <p class="experience-item__text">
                <?php echo $description; ?>
            </p>
        <?php endif; ?>
    </div>
</div>
