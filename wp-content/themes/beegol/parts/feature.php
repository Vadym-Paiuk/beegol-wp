<?php extract( $args ); ?>

<div class="feature">
    <div class="feature__info">
        <div class="feature__tag tag tag--<?php echo $tag['color']; ?>">
            <?php echo $tag['title']; ?>
        </div>
        <h3 class="feature__title">
            <?php echo $title; ?>
        </h3>
        <?php if( !empty( $features ) ): ?>
            <ul class="feature__list check-list">
                <?php foreach( $features as $feature ): ?>
                    <li class="check-list__item">
                        <?php  if ( !empty( $feature['title'] ) ): ?>
                            <h4 class="check-list__title"><?php echo $feature['title']; ?></h4>
                        <?php endif; ?>
                        <?php
                            if ( !empty( $feature['description'] ) ){
                                echo $feature['description'];
                            }
                        ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="feature__media feature__media--light-green <?php if( $image_style !== 'full' ) echo 'feature__media--oversize'; ?>">
        <?php if( !empty( $button ) ): ?>
            <div class="feature__img-wrap">
                <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'feature__img' ] ); ?>
            </div>
            <a href="<?php echo $button['url']; ?>" class="btn feature__btn" target="<?php echo $button['target']; ?>">
                <?php echo $button['title']; ?>
            </a>
        <?php else: ?>
            <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'feature__img' ] ); ?>
        <?php endif; ?>
    </div>
</div>