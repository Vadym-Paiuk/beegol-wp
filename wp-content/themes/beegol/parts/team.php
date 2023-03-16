<?php extract( $args ); ?>

<div class="col-sm-6 col-md-4 col-lg-3 team__col">
    <div class="team-item">
        <?php if( !empty( $image ) ): ?>
            <?php echo wp_get_attachment_image_custom( $image, 'full', false, [ 'class' => 'team-item__img' ] ); ?>
        <?php endif; ?>
        <?php if( !empty( $name ) ): ?>
            <h4 class="team-item__name">
                    <?php echo $name; ?>
            </h4>
        <?php endif; ?>
        <?php if( !empty( $position ) ): ?>
            <p class="team-item__post">
                    <?php echo $position; ?>
            </p>
        <?php endif; ?>
    </div>
</div>
