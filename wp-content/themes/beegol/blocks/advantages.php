<?php
    $block_fields = get_field( 'block_fields' );
?>

<section class="block advantages">
    <div class="container advantages__container advantages__container--<?php echo $block_fields['background']; ?>">
        <?php if( !empty( $block_fields['title'] ) ): ?>
            <h2 class="advantages__title">
                <?php echo $block_fields['title']; ?>
            </h2>
        <?php endif; ?>
        <?php if( !empty( $block_fields['list'] ) ): ?>
            <div class="row advantages__row">
                <?php
                    foreach ( $block_fields['list'] as $advantage ){
                        $args = [
                            'title' => $advantage['title'],
                            'description' => $advantage['description']
                        ];
                        get_template_part( 'parts/advantage', null, $args );
                    }
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>
